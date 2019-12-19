@extends("layout")

@section("content")
    <form method="POST" action="/private-jogos/{{ $jogo->id }}">
        {{method_field("PATCH")}}
        @csrf
        <div class="field">
            <label class="label" for="nome">nome</label>
            <div class="control">
            <input type="text" class="input {{$errors->has("nome")?"is-danger":""}}" name="nome" placeholder="nome_1" value="{{$jogo->nome}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="preco">preco</label>
            <div class="control">
                <input type="number" class="input {{$errors->has("preco")?"is-danger":""}}" name="preco" placeholder="23..." value="{{$jogo->preco}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="pontuacao">pontuacao</label>
            <div class="control">
            <input type="number" class="input {{$errors->has("pontuacao")?"is-danger":""}}" name="pontuacao" placeholder="1...100" value="{{$jogo->pontuacao}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="imagem">imagem</label>
            <div class="control">
            <textarea name="imagem" cols="60" rows="4" placeholder="www.img1.com">{{$jogo->imagem}}</textarea><br>
            </div>
        </div>
        <div class="field">
            @foreach ($plataformas as $plataforma)
                <?php $hasgame=false ?>
                @foreach($jogo->plataformas as $jogoplat)
                    @if(($jogoplat->id==$plataforma->id)||($hasgame))
                        <?php $hasgame=true ?>
                    @endif
                @endforeach 
                <input type="checkbox" @if($hasgame) checked @endif name="{{$plataforma->nome}}" value="{{$plataforma->id}}" >{{$plataforma->nome}}<br>
            @endforeach
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update jogo</button>
            </div>
        </div>
        @if($errors->any())
            <div class="notification is-danger" >
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>
                            {{$erro}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    <form method="POST" action="/private-jogos/{{ $jogo->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete article</button>
            </div>
        </div>
    </form>
@endsection