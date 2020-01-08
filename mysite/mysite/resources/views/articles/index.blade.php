<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @extends('layout')

        @section('content')

    <h1>Articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
            <li>{{ $article->content }}</li>
            <li>{{ $article->featured}}</li>
            <a href="/articles/{{$article->id}}">Show</a>
            </form>
        @endforeach
    </ul>
    <a href="/articles/create">create</a>
    {{-- <a href="/projects/first">first</a>
    <a href="/projects/last">last</a> --}}
    
@endsection
</body>
</html>