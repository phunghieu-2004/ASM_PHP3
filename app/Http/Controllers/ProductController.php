<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    const PATH_VIEW = 'admin.products.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->get();
        // dd($data);
        return view(self::PATH_VIEW.__FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Categorie::query()->pluck('name','id')->all();
        return view(self::PATH_VIEW.__FUNCTION__,compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->except('image');
        
        if($request->hasFile('image')){
            $data['image'] = Storage::put('products',$request->file('image'));
        }else{
            $data['image'] = '';
        }
        // dd($data);
        Product::query()->create($data);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view(self::PATH_VIEW.__FUNCTION__,compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Categorie::query()->pluck('name','id')->all();
        return view(self::PATH_VIEW.__FUNCTION__,compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
{
    $data = $request->except('image');
    if ($request->hasFile('image')) {
        $data['image'] = Storage::put('products', $request->file('image'));
        if (!empty($product->image) && Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
    } else {
        $data['image'] = $product->image;
    }

    $product->update($data);
    return redirect()->route('products.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->where('id', $id)->delete();
        return back();
    }
}
