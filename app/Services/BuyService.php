<?php

namespace goobus\Services;

use Illuminate\Http\Request;
use goobus\Person;
use goobus\User;
use goobus\Product;
use goobus\Http\Requests\RegisterValidate;
use goobus\Http\Requests\SingInValidate;
use goobus\Http\Requests\userUpdateValidate;
use Log;
use Session;
use Storage;
use Hash;

class BuyService 
{
   const COINPRICE = 0.00001;//precio por moneda
    
    //Logica de compra de un producto
    public static function buy(Product $product,Person $person,Person $shopper, Person $vendor){
        
        $moneyToShare  = ($product->pPrice / 2);   // 50% coins ( retencion)
           
        $clientBenefit = (float) ($moneyToShare *  $product->pClientBenefit); //Beneficio  en artmonedas (para comprador)
        
        $shopper->artcoins -= $product->pPrice;
        $shopper->money +=  ($clientBenefit * self::COINPRICE) ;
           
        $vendor->money += (($moneyToShare - $clientBenefit) * self::COINPRICE) ;
           
        $shopper->save();
        $vendor->save();           
           
        $person->money = $shopper->money;
        $person->artcoins = $shopper->artcoins;
        
        return $person;        
    }    
}