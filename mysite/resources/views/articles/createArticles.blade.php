<!DOCTYPE html>
@extends('layout')



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creating</title>
</head>

    <body>

    <h1>Create Article</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <input type="text" name="title" minlength="3" required ><br>
        <textarea name="content" ></textarea><br>
        <input type="radio" name="featured" value="true"> True<br>
        <input type="radio" name="featured" value="false"> False<br>
        <button type="submit">Create Article</button>
    </form>

    </body>
</html>