<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use goobus\Http\Requests\RegisterValidate;
use goobus\Http\Requests\SingInValidate;
use goobus\Http\Requests\userUpdateValidate;
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
    public function index()
    {
        return redirect('artCoinWeb');
    }
    
    public function login()
    {
        return redirect('artCoinWeb');
        
    }
    
    public function profile()
    {
         if (Session::has('user') && Session::has('person')) {
             
            $user   = Session::get('user');
            $person = Session::get('person');            
            return view('profile.user', compact('user', 'person'));
             
         }else{
             
             return redirect('artCoinWeb');
         }
    }
    
    public function sign(SingInValidate $request) // ESTE METODO ES PARA COMPROBAR EL USUARIO EN EL LOGIN
    {
        
        
        
        if (!$request->validated()) { // si no pasa la validacion vuelve al login
            
            return view("login");
            
        } else {
            
            $userExist    = false;
            $errorMessage = "";
            
            try {
                
                $user          = \goobus\User::where('nickname', $request->input('nickname'))->first();
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
                
                $person = \goobus\Person::where('user_id', $user->id)->first();
                $request->session()->put('user', $user);
                $request->session()->put('person', $person);
                
                return redirect('artCoinWeb'); // control de artWebController
                
            } else {
                
                return view('login', compact('errorMessage')); //("bienvenido");
            }            
        }  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if (Session::has('user') && Session::has('person')) {
             
             return redirect('artCoinWeb');
             
         }else{
             
             return view("register");
         }        
    }    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterValidate $request)
    {
        if ($request->validated()) {
            
            $user            = new \goobus\User;
            $user->nickname  = $request->input('nickname');
            $user->email     = $request->input('email');
            $user->user_pass = Hash::make($request->input('user_pass'));
            $user->save();
            
            $person          = new \goobus\Person;
            $person->user_id = $user->id;
            $person->save();
            
            $errorMessage = "";
            return view("login", compact('errorMessage'));
            
        } else {
            
            return view("register");
        }
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $person = \App\Person::find($id);
        return view('edit',compact('person','id'));
        */
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = \goobus\Person::find($id);
        return view('profile', compact('person', 'id'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $user = Session::get('user');
        $user = \goobus\User::find($user->id);
        
        $user->nickname   = $request->input('nickname');
        $user->email      = $request->input('email');
       // $user->user_pass  = $request->input('user_pass');
        $user->lastUpdate = date('Y-m-d H:i:s');
        $user->save();
        
        $person              = Session::get('person');
        $person              = \goobus\Person::find($person->id);
        $person->name        = $request->input('name');
        $person->lastname    = $request->input('lastname');
        $person->address     = $request->input('address');
        $person->country     = $request->input('country');
        $person->cp          = $request->input('cp');
        $person->phone       = $request->input('phone');
        $person->description = $request->input('description');
        
        if ($request->file('avatar') != "") { //Si esta vacio no genero ni guardo foto
            
            $image          = $request->file('avatar');
            $imagedesc      = "../storage/avatar/storage/avatar/images/".$request->input('nickname') . "_".$image->getClientOriginalName();
            $person->avatar = $imagedesc;
            Storage::disk('avatar')->putFileAs('image', $image, $imagedesc);
            
        }
        
        $person->save();
        Session::put('user', $user);
        Session::put('person', $person);
        
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