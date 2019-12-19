<!DOCTYPE html>
<html lang="en">
@extends('layout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
</head>

<body>

    <h1>PROJETOS</h1>

    <ul>
        @foreach ($projects as $project)
        <li><b>{{ $project->title }}</b></li>
        <li>{{ $project->description }}</li>
        @endforeach
    </ul>

    <div class="field">
        <div class="control">
            <a type="submit" class="button is-link" href="/projects/create">Create Project</a>
        </div>
    </div>

</body>

</html>
