@extends("layout")
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>
@section("content")
    <h1 class="title" >{{$jogo->nome}}</h1>
    <h4>{{$jogo->preco}}€</h4>
    <h4>{{$jogo->pontuacao}}/100 pontos</h4>
    <br>
    <h3>Plataformas</h3>
    @foreach ($jogo->plataformas as $plataforma)
        <h4>{{$plataforma->nome}}</h4>
    @endforeach
    <img class="center" src="{{$jogo->imagem}}" alt="" width="50%" height="50%">
    @if(Auth::user()->name=="admin") 
        <button><a href="../private-jogos/{{$jogo->id}}/edit">Edit</a></button> 
    @endif
@endsection