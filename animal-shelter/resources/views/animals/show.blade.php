@extends('layouts.layout')

@section('content')
<div class="content">
    <h2 class="title">{{ $animal->name }} - ID: {{ $animal->id }} - Type: {{ $animal->type }}</h2>
</div>
@endsection