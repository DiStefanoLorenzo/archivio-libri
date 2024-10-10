<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * -- INDEX --
     *
     */
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();
        $books = Book::orderBy('updated_at','asc')->get();

        return view('book.list',compact('categories','books'));
    }

    /**
     * -- CREATE --
     *
     */
    public function create()
    {
        $authors = Author::orderBy('fullname','ASC')->get();
        $categories = Category::orderBy('name','ASC')->get();
        return view('book.add',compact('categories','authors'));
    }

    /**
     * -- STORE --
     *
     */
    public function store(StoreBookRequest $request) : RedirectResponse
    {
        Book::create($request->validated());
        return redirect()->route('home')->with('success','Book created successfully');
    }

    /**
     * -- SHOW --
     *
     */
    public function show(Book $book) : View
    {
        $author = Author::find($book->author_id);
        $category = Category::find($book->category_id);
        return view('book.show',compact('book','author','category'));
    }

    /**
     * -- EDIT --
     *
     */
    public function edit(Book $book) : View
    {
        $authors = Author::orderBy('fullname','ASC')->get();
        $categories = Category::orderBy('name','ASC')->get();
        return view('book.edit',compact('categories','book','authors'));
    }

    /**
     * -- UPDATE --
     *
     */
    public function update(UpdateBookRequest $request, Book $book) : RedirectResponse
    {
        $book->update($request->validated());

        $book->title = $request->title;
        $book->description = $request->description;
        $book->pages = $request->pages;
        $book->category_id = $request->category_id; // Aggiungi category_id
        $book->author_id = $request->author_id;     // Aggiungi author_id

        $book->save();

        return redirect()->route('home')->with('success','Book updated successfully');
    }

    /**
     * -- DESTROY --
     *
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('home')->with('success','Note deleted successfully');
    }
}
