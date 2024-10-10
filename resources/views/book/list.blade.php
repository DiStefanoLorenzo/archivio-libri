@extends('layout.main')

@section('header-title')
    <a href="{{route('book.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi un
        Libro
    </a>
@endsection

@section('header-content')
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
        </button>
        <ul class="dropdown-menu">

            <li><a href="{{route('home')}}" class="dropdown-item me-4 {{url()->current() == route('home') ? 'active' : ''}}">Tutte</a></li>
    @forelse($categories as $category)
        {{-- verifico che non sia l'ultimo elemento, la variabile $loop, nativa di blade, mi permette
        di verificare la condizione --}}
            <li>
                <a href="{{route('category.show', $category->id)}}"
                class="dropdown-item {{(!$loop->last)?'me-4 ' : ''}}{{url()->current() == route('category.show', $category->id) ? 'active' : ''}}">{{$category->name}}</a>
            </li>
    @empty
                <li>Non sono presenti libri</li>
    @endforelse
        </ul>
    </div>
@endsection

@section('main-content')
    @forelse($books as $book)
        @include('partial.book.block')
    @empty
        <article class="row border-bottom border-dark-subtle py-3">
            <div class="col-12">
                Non sono presenti Libri.
            </div>
        </article>
    @endforelse
@endsection
