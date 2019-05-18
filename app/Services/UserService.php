<?php

namespace goobus\Services;

use Illuminate\Http\Request;
use goobus\Person;
use goobus\User;
use goobus\Http\Requests\RegisterValidate;
use goobus\Http\Requests\SingInValidate;
use goobus\Http\Requests\userUpdateValidate;
use Log;
use Session;
use Storage;
use Hash;

class UserService
{
    //busca usuario por nickname
    public static function findUserByNickname(String $nickname)
    {
        $user = \goobus\User::where('nickname', $nickname)->first();
        return $user;
    }
    //busca persona por nombre de columna y valor
    public static function findPersonWhereColumn(String $column, int $value)
    {
        $person = \goobus\Person::where($column, $value)->first();
        return $person;
    }
    //busca persona por id
    public static function findPersonByID(int $idPerson)
    {
        $person = \goobus\Person::find($idPerson);
        return $person;
    }
    //busca usuario por id
    public static function findUserByID(int $idPerson)
    {
        return \goobus\User::find($user->id);
    }
    //guarda un usuario
    public static function saveUser(RegisterValidate $request)
    {
        $user            = new \goobus\User;
        $user->nickname  = $request->input('nickname');
        $user->email     = $request->input('email');
        $user->user_pass = Hash::make($request->input('user_pass'));
        $user->save();
        
        $person          = new \goobus\Person;
        $person->user_id = $user->id;
        $person->save();
    }
    //actualiza un usuario
    public static function updateUser(User $user, Person $person, Request $request)
    {
        $user->nickname   = $request->input('nickname');
        $user->email      = $request->input('email');
        // $user->user_pass  = $request->input('user_pass');
        $user->lastUpdate = date('Y-m-d H:i:s');
        $user->save();
        
        
        $person->name        = $request->input('name');
        $person->lastname    = $request->input('lastname');
        $person->address     = $request->input('address');
        $person->country     = $request->input('country');
        $person->cp          = $request->input('cp');
        $person->phone       = $request->input('phone');
        $person->description = $request->input('description');
        
        if ($request->file('avatar') != "") { //Si esta vacio no genero ni guardo foto
            
            $image          = $request->file('avatar');
            $imagedesc      = "" . $request->input('nickname') . "_" . $image->getClientOriginalName();
            $person->avatar = $imagedesc;
            Storage::disk('avatar')->putFileAs('images', $image, $imagedesc);
            
        }
        
        $person->save();
        Session::put('user', $user);
        Session::put('person', $person);
    }
    
    //actualiza al ganar monedas
    public static function updateCoins(Person $person, Request $request)
    {
        $person->artcoins += (int) $request->input('artcoins');
        $personToUpdate           = self::findPersonByID($person->id);
        $personToUpdate->artCoins = $person->artcoins;
        $personToUpdate->save();
    }
    
    
}