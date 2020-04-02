@extends('welcome')
@section('content')
        {{ $user->name }} - {{ $user->phone->model }}
@endsection