<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use goobus\Services\ProductService;
use Session;
use Log;
use Storage;

class ProductController extends Controller
{
    //Mostramos  productos del usuario
    public function showMyProducts()
    {
        $user     = Session::get('user');
        $person   = Session::get('person');
        $products = ProductService::findProductsByPerson($person->id);
        
        return view('profile.icons', compact('user', 'person', 'products'));
    }
    
    //Mostramos todos los productos
    public function showAllProducts()
    {
        $user     = Session::get('user');
        $person   = Session::get('person');
        $products = ProductService::findAllProducts();
        
        return view('art', compact('user', 'person', 'products'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Formulario de creacion de producto
    public function create()
    {
        $user   = Session::get('user');
        $person = Session::get('person');
        return view('profile.createProduct', compact('user', 'person'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //Guarda producto en la base de datos
    public function store(Request $request)
    {
        $person = Session::get('person');
        $user   = Session::get('user');
        
        ProductService::saveProduct($request, $user, $person);
        
        return redirect('myArt');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //Mostramos producto por id
    public function show($id)
    {
        $myProduct = false;
        $user      = Session::get('user');
        $person    = Session::get('person');
        
        $product = ProductService::findProductByID($id);
        
        if ($product->persona_id == $person->id) { // Determina si en la vista se muestra Borrar o Comprar
            
            $myProduct = true;
        }
        
        return view('artDesc', compact('user', 'person', 'product', 'myProduct'));
    }
    
    public function destroy($id)
    {
        ProductService::deleteProduct($id);
        return redirect('myArt');
    }
}