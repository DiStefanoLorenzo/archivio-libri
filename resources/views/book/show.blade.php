@extends('layout.main')

@section('header-title')
    {{$book->title}}
@endsection

@section('header-content')
    <p><strong>Numero di pagine:</strong> {{$book->pages}}</p>
    <br>
    <p><strong>Categoria:</strong> {{$category->name}}</p>
    <br>
    <p><strong>Autore:</strong> {{$author->fullname}}</p>
    <br>
    {{ $book->updated_at->format('d/m/Y ') }} <small class="hour-note">{{$book->updated_at->format('H:i:s')}}</small>
@endsection


@section('main-content')
    <div class="row py-3">
        <div class="col-sm-12">
            <p>{{$book->book}}</p>
        </div>
        <div class="col-sm-12 border-top pt-4 d-flex justify-content-between">
            <a href="{{route('home')}}"><i class="bi bi-arrow-left"></i> Torna alla lista dei libri</a>
            <span class="d-flex align-items-center justify-content-end">
                        <a onclick="return confirm('Sei Sicuro? Stai eliminando un libro')" href="{{route('book.delete', $book->id)}}"><i class="bi bi-trash"></i></a>
                        <a href="{{route('book.edit', $book->id)}}"><i class="bi bi-pencil ms-3"></i></a>
                    </span>
        </div>
    </div>
@endsection
