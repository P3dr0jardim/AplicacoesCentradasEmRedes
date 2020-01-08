@extends('layout')

@section('content')
    <h1 class="title">{{ $article->title }}</h1>

    <div class="content">{{ $article->content }}</div>

    <p>
       <a href="/projects/{{ $article->id }}/edit">Edit</a>
    </p>
@endsection