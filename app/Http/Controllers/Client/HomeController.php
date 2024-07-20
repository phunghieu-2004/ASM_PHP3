<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Categorie;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->get();
        // dd($data);
        return view('client.home',compact('data'));
    }

    public function shop()
    {
        $data = Product::query()->get();
        // dd($data);
        return view('client.shop',compact('data'));
    }
    public function create()
    {
        $category = Categorie::query()->pluck('name','id')->all();
         return view('client.create',compact('category'));
    }

    public function show(Product $product)
    {
        return view('client.details',compact('product'));
    }
    public function store(StoreProductRequest $request)
    {
        $data = $request->except('image');
        
    }
public function edit(Product $product)
    {
        // return view(self::PATH_VIEW.__FUNCTION__,compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}