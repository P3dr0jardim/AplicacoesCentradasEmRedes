<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @extends('layout')

        @section('content')
    <h1>Create article</h1>
    <form method="POST" action="/articles">
        {{ csrf_field() }}
        <input class="form-control" type="text" name="title" ><br>
        <textarea class="form-control" name="content" ></textarea><br>
        <input name="featured" type="checkbox"> On/Off<br>
        <button class="btn btn-outline-primary" type="submit">Create article</button>
    </form>
    @endsection
</body>
</html>