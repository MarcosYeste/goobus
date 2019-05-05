<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Session;

class PersonController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{ 

return view("login");
}

public function login()
{
return view('login');
}

public function profile(Request $request)
{ 
    $user = $request->session()->get('user');
    $person = $request->session()->get('person');
   // Log::debug('$user: '.$user->nickname);
    return view('profile.user',compact('user','person'));
}
    
public function sign(Request $request){ // ESTE METODO ES PARA COMPROBAR EL USUARIO EN EL LOGIN
   
    $user = \goobus\User::where('nickname',$request->input('nickname')) -> first();
    
    if($user->user_pass == $request->input('user_pass')){
        
        $person = \goobus\Person::where('user_id',$user->id) -> first();
       
         $request->session()->put('user', $user);
         $request->session()->put('person', $person);

        return redirect('artCoinWeb');// control de artWebController
        
    }else{
        
        return view('login');//("bienvenido");
    }



}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view("register");
}


/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$user= new \goobus\User;
$user->nickname = $request->input('nickname');
$user->email = $request->input('email');
$user->user_pass = $request->input('user_pass');
$user->rol = "admin";
$user->lastUpdate = date('Y-m-d H:i:s');
$user->save();   
   
    
$person = new \goobus\Person;
$person->name = "Marcos";
$person->lastname = "Yeste Molino";
$person->address = "C/Montblanc";
$person->country = "Francia";
$person->cp = "43006";
$person->description = "";
$person->phone = "691122254";
$person->artcoins = 400;
$person->money =10;
$person->user_id = $user->id;
$person->save();
    
return view("login");
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
return view('profile',compact('person','id'));
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
   
$user->nickname = $request->input('nickname');
$user->email = $request->input('email');
$user->user_pass = $request->input('user_pass');
$user->lastUpdate = date('Y-m-d H:i:s');
$user->save();      
    
$person = Session::get('person');
$person = \goobus\Person::find($person->id);
$person->name = $request->input('name');
$person->lastname =$request->input('lastname');
$person->address = $request->input('address');
$person->country = $request->input('country');
$person->cp = $request->input('cp');
$person->phone = $request->input('phone');
$person->description = $request->input('description');
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
