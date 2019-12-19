@extends('layout')
@section('content')
<form method="POST" action="/projects/{{$article->id}}">
    {{method_field('PATCH')}}
    @csrf
    <div class="field">
        <label  class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" value="{{$article->title}}">
        </div>

    </div>

    <div class="field">
        <label  class="label" for="description" >Description</label>

        <div class="control">
            <textarea class="textarea" name="description" placeholder="{{$article->content}}">{{$article->content}}</textarea>
        </div>

    </div>

    <div class="field">

        <div class="control">
            <button type="submit" class="button is-link">Update Article</button>
        </div>

    </div>

</form>
<form method="POST" action="/projects/{{$article->id}}">
    {{method_field('DELETE')}}
    @csrf
    <div class="field">

        <div class="control">
            <button type="submit" class="button is-link">Delete</button>
        </div>

    </div>
</form>
@endsection('content')