@extends('layouts.app')

@section('content')

<h2>ALl posts</h2>

@foreach($posts as $post)
    <a href="{{ route('post', $post) }}">{{ $post->title }}</a>
@endforeach

@endsection