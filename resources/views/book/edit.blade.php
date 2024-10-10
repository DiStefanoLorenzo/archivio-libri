@extends('layout.main')

@section('header-title')
    Modifica il Libro
@endsection

@section('header-content')
    Stai modificando un libro.
@endsection


@section('main-content')
    <form action="{{route('book.update', $book->id)}}" class="col-sm-12" method="post">
        @csrf
        @method('PUT')

        <select name="category_id" id="category_id" class="w-100">
            @forelse($categories as $category)
                <option value="{{$category->id}}" {{($category->id == $book->category_id) ? 'selected' : ''}}>
                    {{$category->name}}
                </option>
            @empty
                <option disabled>Non sono presenti tipologie</option>
            @endforelse
        </select>

        <div class="mt-4">
            <label for="title" class="d-block">Inserisci il titolo.
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="title" id="book" class="w-100" maxlength="500" value="{{ $book->title }}">
        </div>

        <div class="mt-4">
            <label for="description" class="d-block">Inserisci la descrizione.
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <textarea name="description" id="description" class="w-100" maxlength="800">{{ $book->description }}</textarea>
        </div>

        <div class="mt-4">
            <label for="pages" class="d-block">Inserisci il numero di pagine.
                @error('pages')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input name="pages" type="number" class="w-100" min="0" value="{{ $book->pages }}">

        </div>
        <div class="mt-4">
            <select name="author_id" id="author_id" class="w-100">
                @forelse($authors as $author)
                    <option value="{{$author->id}}" {{($author->id == $book->author_id) ? 'selected' : ''}}>
                        {{$author->fullname}}
                    </option>
                @empty
                    <option disabled>Non sono presenti tipologie</option>
                @endforelse
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary me-4">Modifica il Libro</button>
        <a href="{{route('home')}}">Annulla</a>
        </div>
    </form>
@endsection
