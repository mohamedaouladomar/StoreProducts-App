<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class AllproductsController extends Controller
{







public function index(Request $request)
{
  $search = $request->input('search');

  if ($search) {
    $products = Product::where('name', 'like', "%$search%")->paginate(10);
  } else {
    $products = Product::paginate(10);
  }

  return view('products.index', ['products' => $products]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('products.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'product-name' =>'required',
            'product-price' =>['required','integer'],
            'product-country' =>'required',
            'product-stock' => ['required','integer'],
        ]);
       $product =  new Product();

       
       $product->name = strip_tags($request->input('product-name')) ;
       $product->price =strip_tags($request->input('product-price'))  ;
       $product->country = strip_tags($request->input('product-country') );
       $product->stock = strip_tags($request->input('product-stock') );

       $product->save();
       return redirect()->route('products.index');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $index = Product::findOrFail($id);
        

      

        return view('products.details ' , [
            'product'=> $index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit',[
            'product' => Product::findOrFail($id)
        ]);
    }
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'product-name' =>'required',
            'product-price' =>['required','integer'],
            'product-country' =>'required',
            'product-stock' => ['required','integer'],
        ]);
        $upp = Product::findOrFail($id);

        $upp->name = strip_tags($request->input('product-name')) ;
        $upp->price =strip_tags($request->input('product-price'))  ;
        $upp->country = strip_tags($request->input('product-country') );
        $upp->stock = strip_tags($request->input('product-stock') );

        $upp->save();
        return redirect()->route('products.index');
        // public function dett(string $id){
        //     return view('products.home');
        // }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete= Product::findOrFail($id);
        $delete->delete();
        return redirect()->route('products.index'); 
    }
    
    public function clearStock()
{
    Artisan::call('clearstock');
    
    return redirect()->route('products.index')->with('status', 'Stock cleared successfully!');
}


    }

    