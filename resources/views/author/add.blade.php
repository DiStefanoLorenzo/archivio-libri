@extends('layout.main')

@section('header-title')
    Nuovo Autore
@endsection

@section('header-content')
    Stai aggiungendo un nuovo autore.
@endsection


@section('main-content')
    <form action="{{route('author.store')}}" class="col-sm-12" method="post">
        @csrf
        @error('author_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mt-4">
            <label for="fullname" class="d-block">Inserisci il nome completo.
                @error('fullname')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="fullname" id="fullname" class="w-100" maxlength="500">
        </div>
        <div class="mt-4">
            <label for="birth" class="d-block">Inserisci la data di nascita
                @error('birth')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="date" name="birth" id="birth" class="w-100" maxlength="500">
        </div>
        <br>
        <button type="submit" class="btn btn-primary me-4">Memorizza l'Autore</button>
        <a href="{{route('author.home')}}">Annulla</a>
        </div>
    </form>
@endsection
