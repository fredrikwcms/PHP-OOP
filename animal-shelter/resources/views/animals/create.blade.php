@extends('layouts.layout')

@section('content')
<div class="wrapper">
    <h2>Add Animal</h2>
    <form action="/animals" method="POST">
        @csrf
        <label for="name">Animal name</label>
        <input type="text" id="name" name="name">
        <label for="type">Animal type</label>
        <input type="text" id="type" name="type">
        <label for="color">Animal color</label>
        <input type="text" id="color" name="color">
        <input type="submit" value="Add Animal">
    </form>
</div>
@endsection