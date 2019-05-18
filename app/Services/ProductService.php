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

class ProductService
{
    //Busca los productos de la persona
    public static function findProductsByPerson(int $idPerson)
    {
        $products = \goobus\Product::where('persona_id', $idPerson)->get();
        return $products;
    }
    //Busca todos los productos
    public static function findAllProducts()
    {
        return \goobus\Product::all();
    }
    // busca el produto por id
    public static function findProductByID(int $id)
    {
        return \goobus\Product::find($id);
    }
    //guarda el producto
    public static function saveProduct(Request $request, User $user, Person $person)
    {
        
        $product                 = new \goobus\Product;
        $product->pName          = $request->input('pName');
        $product->pDesc          = $request->input('pDesc');
        $product->pPrice         = $request->input('pPrice');
        $product->pClientBenefit = 0.1;
        
        if ($request->file('pUrl') != "") { //Si esta vacio no genero ni guardo foto
            
            $image         = $request->file('pUrl');
            $imagedesc     = "" . $user->nickname . "_" . $image->getClientOriginalName();
            $product->pUrl = $imagedesc;
            Storage::disk('product')->putFileAs('images', $image, $imagedesc);
        }
        
        $product->pType      = $request->input('pType');
        $product->pStars     = "3";
        $product->persona_id = $person->id;
        $product->save();
        
        $recordShop                   = new \goobus\RecordShop;
        $recordShop->recPrice         = $request->input('pPrice');
        $recordShop->recClientBenefit = $request->input('pClientBenefit');
        $recordShop->persona_id       = $person->id;
        $recordShop->product_id       = $product->id;
        $product->save();
    }
    //borra el producto
    public static function deleteProduct(int $id)
    {
        $product = \goobus\Product::find($id);
        $product->delete();
    }
    
    
}