@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <img src="uploads/avatars/{{ $user->avatar }}">
            <h2>{{ $user->name }}'s profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                @csrf
                <label for="avatar">Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>    
        </div>    
    </div>    
</div>    
@endsection