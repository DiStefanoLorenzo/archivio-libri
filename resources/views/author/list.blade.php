@extends('layout.main')

@section('header-title')
    <a href="{{route('author.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi un
        Autore
    </a>

@endsection

@section('main-content')
    @forelse($authors as $author)
        @include('partial.author.block')
    @empty
        <article class="row border-bottom border-dark-subtle py-3">
            <div class="col-12">
                Non sono presenti Autori.
            </div>
        </article>
    @endforelse
@endsection
