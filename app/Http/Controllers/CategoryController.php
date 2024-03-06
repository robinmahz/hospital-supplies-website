<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatagoryRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return View("hospital.category.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->paginate('10');
        return View("hospital.category.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $rest = [
            'slug' => Str::slug($request->name),
        ];
        if (isset($request->image)) {
            $image = $this->set('/categories', $request->file('image'));
            $rest = [
                'slug' => Str::slug($request->name),
                'image' => $image,
            ];
        }
        Category::create($request->except(['slug', 'image']) + $rest);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('hospital.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('hospital.category.edit', compact(['category', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->delete('/categories', '/' . $category->getRawOriginal('image'));
        $category->delete();
        return redirect('/category');
    }
}
