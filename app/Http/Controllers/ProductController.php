<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function _contruct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        return view('act1.product')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(products $product)
    {
        $product = products::find($product);
        return view('act1.addproduct')->with([
            'product'=> $product,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, products $product)
    {
        $request->validate([
            'name'=> 'required',
            'description' => 'required',
            'price'=> 'required'
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(products $product)
    {
        return view('act1.show')->with([
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(products $product)
    {
        return view('act1.edit')->with([
            'product'=> $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $product)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
