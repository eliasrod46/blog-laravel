<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Display a listing of the categories.
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    // Show the form for creating a new category.
    public function create(){
        return view('admin.categories.create');
    }

    // Store a newly created category in storage.
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        $category = Category::create($request->all());

        return redirect()->route('admin.categories.edit',$category)->with('info', 'Categoria agregada con exito');;
    }

    // Display the specified category.
    public function show(Category $category){
        return view('admin.categories.show', compact('category'));
    }

    // Show the form for editing the specified category.
    public function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }

    // Update the specified category in storage.
    public function update(Request $request, Category $category){
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);

        $category->update($request->all());

        return redirect()->route('admin.categories.edit',$category)->with('info', 'Categoria actualizada con exito');
    }

    // Remove the specified category from storage.
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.categories.index')->with('info', 'Categoria eliminada con exito');
    }
}
    // Display a listing of the resource.
    // Show the form for creating a new resource.
    // Store a newly created resource in storage.
    // Display the specified resource.
    // Show the form for editing the specified resource.
    // Update the specified resource in storage.
    // Remove the specified resource from storage.
