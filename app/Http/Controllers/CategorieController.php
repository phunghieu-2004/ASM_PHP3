<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.category.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categorie::query()->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categorie::query()->create($data);
        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $category)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($data);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return back();
    }
}
