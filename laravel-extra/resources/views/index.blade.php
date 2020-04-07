<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All posts</title>
</head>
<body>
    @foreach($posts as $post)
        <h1>{{ $post->title }}</h1>
        <h2>{{ $post->slug }}</h2>
<a href="/posts/{{ $post->slug }}">{{$post->title}}</a>
    @endforeach
</body>
</html>