@extends('layouts.layout')

@section('content')

<div class="wrapper">
    <h2>Add a new recipe</h2>
    <form action="/recipes" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title">

        <label for="excerpt">Excerpt</label>
        <input type="text" name="excerpt">

        <label for="instructions">Instructions</label>
        <input type="text" name="instructions">

        <label for="ingredients">Ingredients</label>
        <input type="text" name="ingredients">

        <label for="tags">Tags</label>
        <fieldset>
            <input type="checkbox" name="tags[]" value="pasta">Pasta<br />
            <input type="checkbox" name="tags[]" value="pizza">Pizza<br />
            <input type="checkbox" name="tags[]" value="salad">Salad<br />
            <input type="checkbox" name="tags[]" value="dessert">Dessert<br />
        </fieldset>
        <input type="submit" value="Add recipe">
    </form>
</div>