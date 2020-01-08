@extends('layouts.app')

@section("content")
    <h1>Create Game</h1>
    <form method="POST" action="/private/jogos/store">
        {{csrf_field()}}
        <input type="text" name="nome" placeholder="nome" value="{{old("nome")}}"><br>
        <input type="number" name="preco" placeholder="preço" value="{{old("preco")}}"><br>
        <input type="number" name="pontuacao" placeholder="pontuação" value="{{old("pontuacao")}}"><br>
        <textarea name="imagem" cols="60" rows="4" value="{{old("imagem")}}" placeholder="www.img1.com"></textarea><br>
        <div class="field">
            @foreach ($plataformas as $plataforma)
                <input type="checkbox" name="{{$plataforma->nome}}" value="{{$plataforma->id}}" >{{$plataforma->nome}}<br>
            @endforeach
        </div>
        <input type="submit" name="submit">
    </form>
@endsection

