@extends('layout.main')

@section('header-title')
    Nuova Categoria
@endsection

@section('header-content')
    Stai aggiungendo una nuova Categoria.
@endsection


@section('main-content')
    <form action="{{route('category.store')}}" class="col-sm-12" method="post">
        @csrf
        @error('author_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mt-4">
            <label for="name" class="d-block">Inserisci il nome.
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name" class="w-100" maxlength="500">
        </div>
        <br>
        <button type="submit" class="btn btn-primary me-4">Memorizza la Categoria</button>
        <a href="{{route('category.home')}}">Annulla</a>
        </div>
    </form>
@endsection
