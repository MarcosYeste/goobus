<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showMyProducts()
    {
        
        $user     = Session::get('user');
        $person   = Session::get('person');
        $products = \goobus\Product::where('persona_id', $person->id); 
         Log::debug('Hola '.$person->id);
        foreach ($products as $p) {
                Log::debug('Hola '.$p->pName);
        }
        
        return view('profile.icons', compact('user', 'person','products'));
    }
       public function showAllProducts()
    {
        
        $user     = Session::get('user');
        $person   = Session::get('person');
        $products = \goobus\Product::all();       
        
        return view('art', compact('user', 'person','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $person = Session::get('person');
       /* 
         $product                 = new \goobus\Product;
         $product->pName          = $request->input('pName');
         $product->pDesc          = $request->input('pDesc');
         $product->pPrice         = $request->input('pPrice');
         $product->pClienBenefit  = $request->input('pClientBenefit');
         $product->pUrl           = $request->input('pUrl');
         $product->pType          = $request->input('pType');
         $product->pStars         = $request->input('pStars');
         $product->pTimesBought   = $request->input('pTimesBought');
         $product->save();        
        
         $recordShop                   = new \goobus\RecordShop;
         $recordShop->recPrice         = $request->input('recPrice');
         $recordShop->recClienBenefit  = $request->input('recClientBenefit');
         $recordShop->persona_id       = $person->id;
         $recordShop->product_id       = $product->id;
         $product->save();*/
        
         $product                 = new \goobus\Product;
         $product->pName          = "La mona Lissy";
         $product->pDesc          = "Dibujos de bellas artes";
         $product->pPrice         =  3300;
         $product->pClientBenefit  =  "0.20";
         $product->pUrl           =  "/lalala";
         $product->pType          = "Ilustración";
         $product->pStars         =  "3";
         $product->persona_id     = $person->id;
         $product->save();        
        
         $recordShop                   = new \goobus\RecordShop;
         $recordShop->recPrice         = 1500;
         $recordShop->recClientBenefit  = "2%";
         $recordShop->persona_id       = $person->id;
         $recordShop->product_id       = $product->id;
         $recordShop->save();
        
         return redirect('myArt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       $product = \goobus\Product::find($id);
       $product->delete();
       return redirect('productId');
    }
}
