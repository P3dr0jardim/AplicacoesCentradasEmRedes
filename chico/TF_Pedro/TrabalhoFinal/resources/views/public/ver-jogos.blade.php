@extends("layout")
@section("content")
    <form method="POST" action="/public/ver-jogos">
        {{csrf_field()}}
        <label for="">nome:</label>
        <input type="text" name="nome" placeholder="title"><br>
        <label for="">pontuacao minima:</label>
        <input type="number" name="pontuacao" placeholder="1...100"><br>
        <input type="checkbox" name="invert" value=1>invert <br>
        <input type="submit" name="submit" value="search">
    </form>
    <hr>
    <h1>JOGOS</h1>
    <br>
    <div class="container">
        <div class="row">
        @foreach($jogos as $jogo)
            <div class="col-md-4">
                <ul>
                    
                        <li>
                            <h3><a href="/public/{{$jogo->id}}" >{{$jogo->nome}}</a></h3>
                            <h5>{{$jogo->preco}}€</h5>
                            <h5>{{$jogo->pontuacao}}/100</h5>
                            <img src="{{$jogo->imagem}}" alt="" width="250" height="150">
                            @if(Auth::user()->name=="admin") 
                                <button><a href="../private-jogos/{{$jogo->id}}/edit">Edit</a></button> 
                            @endif
                            <!-- <button><a href="articles/{$article->id}}/edit">Edit</a></button> 
                            <a href="public/{$jogo->id}}">{$jogo->nome}}</a> -->
                        </li>
                    
                </ul>
            </div>
        @endforeach 
        </div>
    </div>
@endsection