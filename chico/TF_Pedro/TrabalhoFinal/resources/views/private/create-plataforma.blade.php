@extends('layouts.app')

@section("content")
    <h1>Create Plataforma</h1>
    <form method="POST" action="/private/plataformas/store">
        {{csrf_field()}}
        <input type="text" name="nome" placeholder="nome" value="{{old("nome")}}"><br>
        <input type="submit" name="submit">
    </form>
@endsection

