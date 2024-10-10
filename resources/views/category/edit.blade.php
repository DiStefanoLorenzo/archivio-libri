@extends('layout.main')

@section('header-title')
    Modifica la Categoria
@endsection

@section('header-content')
    Stai modificando una Categora.
@endsection


@section('main-content')
    <form action="{{route('category.update', $category->id)}}" class="col-sm-12" method="post">
        @csrf
        @method('PUT')

        <div class="mt-4">
            <label for="name" class="d-block">Inserisci il nome.
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name" class="w-100" maxlength="500" value="{{$category->name}}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary me-4">Modifica la Categoria</button>
        <a href="{{route('category.home')}}">Annulla</a>
        </div>
    </form>
@endsection
