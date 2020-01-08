@extends('layouts.app')

@section("content")
    <form method="POST" action="/private-plataformas/{{ $plataforma->id }}">
        {{method_field("PATCH")}}
        @csrf
        <div class="field">
            <label class="label" for="nome">nome</label>
            <div class="control">
            <input type="text" class="input {{$errors->has("nome")?"is-danger":""}}" name="nome" placeholder="nome_1" value="{{$plataforma->nome}}">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update plataforma</button>
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
    <form method="POST" action="/private-plataformas/{{ $plataforma->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete article</button>
            </div>
        </div>
    </form>
@endsection