<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthorController extends Controller
{
    /**
     * -- INDEX --
     *
     */
    public function index()
    {
        $authors = Author::orderBy('fullname','asc')->get();

        return view('author.list',compact('authors'));
    }

    /**
     * -- CREATE --
     *
     */
    public function create()
    {
        $authors = Author::orderBy('birth','ASC')->get();
        return view('author.add',compact('authors'));
    }

    /**
     * -- STORE --
     *
     */
    public function store(StoreAuthorRequest $request) : RedirectResponse
    {
        Author::create($request->validated());
        return redirect()->route('author.home')->with('success','Note created successfully');
    }

    /**
     * -- SHOW --
     *
     */
    public function show(Author $author) : View
    {
        return view('author.show',compact('author'));
    }

    /**
     * -- EDIT --
     *
     */
    public function edit(Author $author) : View
    {
        return view('author.edit',compact('author'));
    }

    /**
     * -- UPDATE --
     *
     */
    public function update(UpdateAuthorRequest $request, Author $author) : RedirectResponse
    {
        $author->update($request->validated());

        $author->fullname = $request->fullname;
        $author->birth = $request->birth;

        $author->save();

        return redirect()->route('author.home')->with('success','Author updated successfully');
    }

    /**
     * -- DESTROY --
     *
     */
    public function destroy(Author $author): RedirectResponse
    {
        $author->delete();
        return redirect()->route('author.home')->with('success','Author deleted successfully');
    }
}
