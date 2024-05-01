<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function product(string $category, string $product)
    {
        $product = Product::where('slug', $product)->first();
        return view("hospital.pages.product", compact('category', 'product'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("hospital.pages.about");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::where('slug', $id)->first();
        $product = Product::where('category_id', $category->id)->get();
        return view("hospital.pages.category", compact('category', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
