@extends('layout.main')

@section('header-title')
    <a href="{{route('category.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi una
        Categoria
    </a>

@endsection

@section('main-content')
    @forelse($categories as $category)
        @include('partial.category.block')
    @empty
        <article class="row border-bottom border-dark-subtle py-3">
            <div class="col-12">
                Non sono presenti Categorie.
            </div>
        </article>
    @endforelse
@endsection
