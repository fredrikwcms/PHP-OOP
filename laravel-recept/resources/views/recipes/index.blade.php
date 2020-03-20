@extends('layouts.layout')

@section('content')

<div class="content">
    <h2>Our recipes</h2>

    @foreach($recipes as $recipe)
        <h3><a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a></h3>
    @endforeach

    <p>{{ session('msg') }}</p>
</div>