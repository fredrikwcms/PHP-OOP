@extends('layouts.layout')

@section('content')

<div class="wrapper">
    <h2>Update recipe {{ $recipe->id }}</h2>
<form action="/recipes/{{ $recipe->id }}" method="POST">
        @csrf
        <label for="title">Title</label>
<input type="text" name="title" placeholder="{{ $recipe->title}}">

        <label for="excerpt">Excerpt</label>
        <input type="text" name="excerpt" placeholder="{{ $recipe->excerpt}}">

        <label for="instructions">Instructions</label>
        <input type="text" name="instructions" placeholder=" {{ $recipe->instructions }}">

        <label for="ingredients">Ingredients</label>
        <input type="text" name="ingredients" placeholder="{{ $recipe->ingredients }}">

        <label for="tags">Tags</label>
        <fieldset>
            <input type="checkbox" name="tags[]" value="pasta">Pasta<br />
            <input type="checkbox" name="tags[]" value="pizza">Pizza<br />
            <input type="checkbox" name="tags[]" value="salad">Salad<br />
            <input type="checkbox" name="tags[]" value="dessert">Dessert<br />
        </fieldset>
        <input type="submit" value="Update recipe">
    </form>
</div>