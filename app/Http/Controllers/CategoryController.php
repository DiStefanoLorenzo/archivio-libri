<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();

        return view('category.list',compact('categories'));
    }

    /**
     * -- SHOW --
     *
     */
    public function show($id)
    {
        $categories = Category::orderBy('name','asc')->get();
        $caterory = Category::find($id);
        $books = $caterory->books;
        return view('book.list',compact('categories','books'));
    }

    /**
     * -- CREATE --
     *
     */
    public function create()
    {
        $caterories = Category::orderBy('name','ASC')->get();
        return view('category.add',compact('caterories'));
    }

    /**
     * -- STORE --
     *
     */
    public function store(StoreCategoryRequest $request) : RedirectResponse
    {
        Category::create($request->validated());
        return redirect()->route('category.home')->with('success','Note created successfully');
    }

    /**
     * -- EDIT --
     *
     */
    public function edit(Category $category) : View
    {
        return view('category.edit',compact('category'));
    }

    /**
     * -- UPDATE --
     *
     */
    public function update(UpdateCategoryRequest $request, Category $category) : RedirectResponse
    {
        $category->update($request->validated());

        $category->name = $request->name;

        $category->save();

        return redirect()->route('category.home')->with('success','Category updated successfully');
    }

    /**
     * -- DESTROY --
     *
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('category.home')->with('success','Category deleted successfully');
    }
}
