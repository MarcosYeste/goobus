<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use goobus\Http\Requests\RegisterValidate;
use goobus\Http\Requests\SingInValidate;
use goobus\Http\Requests\userUpdateValidate;
use goobus\Services\UserService;
use goobus\Services\BuyService;
use goobus\Services\ProductService;
use Log;
use Session;
use Storage;
use Hash;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Redirecciona a artcoinweb en ArtWebController
    public function login()
    {
        return redirect('artCoinWeb');
        
    }
    
    //Controla el accedo al perfil de usuario
    public function profile()
    {
        if (Session::has('user') && Session::has('person')) {
            
            $user   = Session::get('user');
            $person = Session::get('person');
            return view('profile.user', compact('user', 'person'));
            
        } else {
            
            return redirect('artCoinWeb');
        }
    }
    
    //Verifica formulario y inicia session
    public function sign(SingInValidate $request)
    {
        if (!$request->validated()) { // si no pasa la validacion vuelve al login
            
            return view("login");
            
        } else {
            
            $userExist    = false;
            $errorMessage = "";
            
            try {
                
                $user          = UserService::findUserByNickname($request->input('nickname'));
                $inputPassword = $request->input('user_pass');
                
                if (Hash::check($inputPassword, $user->user_pass)) {
                    
                    $userExist = true;
                    
                } else {
                    
                    $errorMessage = "Contraseña incorrecta";
                }
                
            }
            catch (\Exception $e) {
                
                $errorMessage = "Nickname incorrecto";
            }
            
            if ($userExist) { // si existe el usuario se guarda en session
                
                $person = UserService::findPersonWhereColumn('user_id', $user->id);
                $request->session()->put('user', $user);
                $request->session()->put('person', $person);
                
                return redirect('artCoinWeb');
                
            } else {
                
                return view('login', compact('errorMessage'));
            }
        }
    }
    
    //Controla cuando el usuario gana Coins
    public function coinWined(Request $request)
    {
        if (Session::has('user') && Session::has('person')) {
            
            $person = Session::get('person');
            
            UserService::updateCoins($person, $request);
            
            return redirect('ads');
            
        } else {
            
            return view("ads");
        }
    }
    
    //Controla cuando el usuario compra arte
    public function buy($id)
    {
        $product = ProductService::findProductByID($id);
        
        //Usuarios
        $person  = Session::get('person');
        $shopper = UserService::findPersonByID($person->id);
        
        if (($shopper->artcoins - $product->pPrice) > 0) { //si coins compra
            
            $vendor = UserService::findPersonWhereColumn('id', $product->persona_id);
            $person = BuyService::buy($product, $person, $shopper, $vendor);
            Session::put('person', $person);
            
            return redirect('art');
            
        } else {
            
            return redirect('art');
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Controla el acceso a regitro
    public function create()
    {
        if (Session::has('user') && Session::has('person')) {
            
            return redirect('artCoinWeb');
            
        } else {
            
            return view("register");
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    
    //Verifica formulario y guarda usuario en BBDD
    public function store(RegisterValidate $request)
    {
        $errorMessage = "";
        
        if ($request->validated()) {
            
            $user = UserService::findUserByNickname($request->input('nickname'));
            
            if ($user === null) {
                
                UserService::saveUser($request);
                return view("login", compact('errorMessage'));
                
            } else {
                
                $errorMessage = "Nickname no esta disponible";
                return view("register", compact('errorMessage'));
            }
            
        } else {
            
            return view("register", compact('errorMessage'));
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    
    //Update del usuario
    public function update(Request $request)
    {
        $user   = Session::get('user');
        $person = Session::get('person');
        
        $user   = UserService::findUserByID($user->id);
        $person = UserService::findPersonByID($person->id);
        
        UserService::updateUser($user, $person, $request);
        
        return redirect('profile');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person->delete();
    }
}