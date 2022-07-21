<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    { 
        return view('products.index', [
            'products' => DB::table('products')->get()
        ]);
    }
    public function add()
    {
        return view('products.add');
    }
    public function store(Request $request)
    {
        $product = new Product(); 
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // dd($product);
        $product->save();
        // return view('products.index', [
        //     'products' => DB::table('products')->get()
        // ]); 
        return redirect()->route('product-index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $request, Product $product)
    {
        
        DB::table('products')->where('id',$request->id)->update([
            'name'=>$request->name,
            'description'=> $request->description,
            'price'=> $request->price
        ]);
        return redirect()->route('product-index');
    }
    public function delete($id)
    {
        DB::table('products')->delete($id);
        return redirect()->route('product-index');
    }
}

