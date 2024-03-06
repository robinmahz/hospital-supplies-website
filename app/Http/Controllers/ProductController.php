<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Traits\ImageTrait;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ImageTrait;
    public function index()
    {
        $products = Product::latest()->paginate("10");
        return view("hospital.product.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(10);
        return view(
            "hospital.product.create",
            compact(["products", "categories"])
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // saving in the products table
        $slug = Str::slug($request->name);
        Product::create(
            $request->except(["slug", "image"]) + ["slug" => $slug]
        );

        // saving images in the product galary
        $product = Product::where("slug", $slug)->first();
        foreach ($request->file("images") as $file) {
            $image = $this->set("/products", $file);
            ProductGallery::create([
                "image" => $image,
                "product_id" => $product->id,
            ]);
        }

        return redirect("/product");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("hospital.product.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view(
            "hospital.product.edit",
            compact(["product", "categories"])
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update(
            $request->except('image') + ["slug" => Str::slug($request->name)]
        );

        // saving images in the product galary
        if (isset($request->images)) {
            foreach ($request->file("images") as $file) {
                $image = $this->set("/products", $file);
                ProductGallery::create([
                    "image" => $image,
                    "product_id" => $product->id,
                ]);
            }
        }

        return redirect("/product");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect("/product");
    }
}
