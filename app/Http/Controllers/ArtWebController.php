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
    public function index()
    {
         return view("bienvenido");
    }
      public function login()
    {
         return view('login');//("bienvenido");
    }
    
      public function secondIndex()
    {
         return view('landing');//("bienvenido");
    }
       public function registro()
    {
         return view('register');//("bienvenido");
    }
       public function contact()
    {
           
         return view('info.contact');//("bienvenido");
    }
       public function privacity()
    {
           
         return view('info.politicaPrivacidad');//("bienvenido");
    }
       public function cookies()
    {
           
         return view('info.politicaCookies');//("bienvenido");
    }
    
    
    public function artCoinWeb()
{ 
    if (Session::has('user') && Session::has('person')) {
        
        $user = Session::get('user');
        $person = Session::get('person');
        return view('landing',compact('user','person')); 
   
     }else{
        // aqui deberia ir un error de session expirada o algo
        return view('login');
    }
    
}
public function logout()
{ 
    Session::flush();
    return view('bienvenido');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         Log::debug('CREATE');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::debug('STORE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::debug('SHOW');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Log::debug('EDIT');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
