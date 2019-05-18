<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Session;

class ArtWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Controla la session y devuelve a un welcome o a otro
    public function index()
    {
        if (Session::has('user') && Session::has('person')) {
            
            return redirect('artCoinWeb'); // control de artWebController
            
        } else {
            
            return view('welcome');
        }
    }
    
    //Controla el acceso a la pagina una vez iniciado session
    public function artCoinWeb()
    {
        if (Session::has('user') && Session::has('person')) {
            
            $user   = Session::get('user');
            $person = Session::get('person');
            return view('welcomeUser', compact('user', 'person'));
            
        } else {
            
            $errorMessage = "";
            return view("login", compact('errorMessage'));
        }
    }
    
    //Da acceso a la pagina de anuncios  
    public function ads()
    {
        if (Session::has('user') && Session::has('person')) {
            
            $user   = Session::get('user');
            $person = Session::get('person');
            return view('ads', compact('user', 'person'));
            
        } else {
            // aqui deberia ir un error de session expirada o algo
            $errorMessage = "";
            return view("login", compact('errorMessage'));
        }
    }
    
    //Da acceso a la pagina de estadisticas  
    public function stadistics()
    {
        if (Session::has('user') && Session::has('person')) {
            
            $user   = Session::get('user');
            $person = Session::get('person');
            return view('profile.stadistics', compact('user', 'person'));
            
        } else {
            // aqui deberia ir un error de session expirada o algo
            $errorMessage = "";
            return view("login", compact('errorMessage'));
        }
    }
    
    //Contacto
    public function contact()
    {
        return view('info.contact');
    }
    
    //politica de privacidad
    public function privacity()
    {
        return view('info.politicaPrivacidad');
    }
    
    //cookies
    public function cookies()
    {
        return view('info.politicaCookies');
    }
    //Cerrar Session
    public function logout()
    {
        Session::flush();
        return view('welcome');
    }
}