<?php

namespace goobus\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Log;
use Storage;

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
        $products = \goobus\Product::where('persona_id', $person->id)->get();  
        
        return view('profile.icons', compact('user', 'person','products'));
    }
       public function showAllProducts()
    {
        
        $user     = Session::get('user');
        $person   = Session::get('person');
        $products = \goobus\Product::all(); 
        $products = \goobus\Product::where('persona_id', $person->id)->get();       
        
        return view('art', compact('user', 'person','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user     = Session::get('user');
        $person   = Session::get('person');
        return view('profile.createProduct', compact('user', 'person'));
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
         $user     = Session::get('user');
      
         $product                 = new \goobus\Product;
         $product->pName          = $request->input('pName');
         $product->pDesc          = $request->input('pDesc');
         $product->pPrice         = $request->input('pPrice');
         $product->pClientBenefit  = $request->input('pClientBenefit');
        
         if ($request->file('pUrl') != "") { //Si esta vacio no genero ni guardo foto
            
            $image          = $request->file('pUrl');
            $imagedesc      = "../storage/product/storage/product/images/".$user->nickname ."_". $image->getClientOriginalName();          
            $product->pUrl  = $imagedesc;            
            Storage::disk('product')->putFileAs('images', $image, $imagedesc);            
        }
        
         $product->pType          = $request->input('pType');
         $product->pStars         = "3";
         $product->persona_id     = $person->id;
         $product->save();        
        
         $recordShop                   = new \goobus\RecordShop;
         $recordShop->recPrice         = $request->input('pPrice');
         $recordShop->recClientBenefit  = $request->input('pClientBenefit');
         $recordShop->persona_id       = $person->id;
         $recordShop->product_id       = $product->id;
         $product->save();
        
        /*
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
         */
        
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
        $myProduct = false;
        $user     = Session::get('user');
        $person   = Session::get('person');
        
        $product = \goobus\Product::find($id);
        
        if($product->persona_id == $person->id){
            
            $myProduct = true;
        }
        
        return view('artDesc', compact('user', 'person','product','myProduct'));
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
        
        //$contents = Storage::get('file.jpg');
        // OR 
        //$exists = Storage::disk('s3')->exists('file.jpg');
        
        // Y ELIMINAR 
        // Storage::delete('file.jpg');
        // OR 
        //Storage::delete(['file.jpg', 'file2.jpg']);

        
       $product->delete();
      return redirect('myArt');
    }
}
