@extends('layouts.app')

@section('content')
<form action="{{ route('search') }}" method="get">
<input type="text" name="search" id="search">
</form>
<h2>Your search returned</h2>
<korv></korv>
@foreach($results as $result)
    <a href="{{ route('post', $result) }}">{{ $result->title }}</a>
@endforeach

@endsection