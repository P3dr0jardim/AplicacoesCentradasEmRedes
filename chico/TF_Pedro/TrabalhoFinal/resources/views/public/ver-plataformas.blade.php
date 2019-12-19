@extends("layout")
@section("content")
    <h1>Plataformas</h1>
    <br>
    <ul>
        @foreach($plataformas as $plataforma)
            <li>
                <label><b>{{$plataforma->nome}}</b></label>
                @if(Auth::user()->name=="admin") 
                    <button><a href="../private-plataformas/{{$plataforma->id}}/edit">Edit</a></button> 
                @endif
                <!-- <button><a href="articles/{$article->id}}/edit">Edit</a></button> -->
            </li>
        @endforeach
    </ul>
@endsection