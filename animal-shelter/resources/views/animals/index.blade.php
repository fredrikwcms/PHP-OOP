@extends('layouts.layout')

@section('content')

<div class="content">
    <h2>Animals</h2>

    @foreach($animals as $animal)
        
       <a href="/animals/{{ $animal->id }}">{{ $animal['name'] }} - {{ $animal['type'] }}</a>

    @endforeach

</div>
@endsection