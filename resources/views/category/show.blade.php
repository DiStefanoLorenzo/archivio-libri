@extends('layout.main')

@section('header-title')
    Autore
@endsection

@section('header-content')
    <p><strong>Nome Completo:</strong> {{$author->fullname}}</p>
    <br>
    <p><strong>Data di nascita:</strong> {{$author->birth}}</p>
    <br>
    {{ $author->updated_at->format('d/m/Y ') }} <small class="hour-note">{{$author->updated_at->format('H:i:s')}}</small>
@endsection


@section('main-content')
    <div class="row py-3">
        <div class="col-sm-12">
            <p>{{$author->author}}</p>
        </div>
        <div class="col-sm-12 border-top pt-4 d-flex justify-content-between">
            <a href="{{route('author.home')}}"><i class="bi bi-arrow-left"></i> Torna alla lista degli autori</a>
            <span class="d-flex align-items-center justify-content-end">
                        <a onclick="return confirm('Sei Sicuro? Stai eliminando un autore')" href="{{route('author.delete', $author->id)}}"><i class="bi bi-trash"></i></a>
                        <a href="{{route('author.edit', $author->id)}}"><i class="bi bi-pencil ms-3"></i></a>
                    </span>
        </div>
    </div>
@endsection
