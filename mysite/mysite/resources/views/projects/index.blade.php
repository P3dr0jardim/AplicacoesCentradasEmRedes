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
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
            <li>{{ $project->description }}</li>
            <a href="/projects/{{$project->id}}">Show</a>
            </form>
        @endforeach
    </ul>
    <a href="/projects/create">create</a>
    <a href="/projects/first">first</a>
    <a href="/projects/last">last</a>
    @endsection
</body>
</html>