@extends('layouts.app')

@section('content')
<form action="{{ route('search') }}" method="get">
    <input type="text" name="search" id="search" placeholder="Search">
    <button type="submit">Submit</button>
    </form>
<h2>ALl posts</h2>
<korv></korv>
@foreach($posts as $post)
    <a href="{{ route('post', $post) }}">{{ $post->title }}</a>
@endforeach

@endsection