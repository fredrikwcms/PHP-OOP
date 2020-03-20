@extends('layouts.layout')

@section('content')

<div class="single-recipe">
    <h3>{{ $recipe->title }}</h3>
    <p>{{ $recipe->instructions }}</p>

    {{-- <ul>
    @foreach($recipes->tags as $tag)
        <li>{{ $tag }}</li>
    @endforeach
    </ul> --}}
    <form action="/recipes/{{ $recipe->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete recipe</button>
    </form>
    <button><a href="/recipes/edit/{{ $recipe->id }}">Edit Recipe</a></button>
</div>