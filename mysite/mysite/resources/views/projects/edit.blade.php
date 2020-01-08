@extends('layout')
@section('content')
<form method="POST" action="/projects/{{$project->id}}">
    {{method_field('PATCH')}}
    @csrf
    <div class="field">
        <label  class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" value="{{$project->title}}">
        </div>

    </div>

    <div class="field">
        <label  class="label" for="description" >Description</label>

        <div class="control">
            <textarea class="textarea" name="description" placeholder="{{$project->description}}">{{$project->description}}</textarea>
        </div>

    </div>

    <div class="field">

        <div class="control">
            <button type="submit" class="button is-link">Update project</button>
        </div>

    </div>

</form>
<form method="POST" action="/projects/{{$project->id}}">
    {{method_field('DELETE')}}
    @csrf
    <div class="field">

        <div class="control">
            <button type="submit" class="button is-link">Delete</button>
        </div>

    </div>
</form>
@endsection('content')