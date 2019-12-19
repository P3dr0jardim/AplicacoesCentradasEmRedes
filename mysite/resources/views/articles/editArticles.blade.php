@extends('layout')
@section('content')

<!-- FORM EDIT -->
<form method="POST" action="/articles/{{$articles->id}}">
    {{method_field('PATCH')}}
    @csrf


    <div class="field">
        <label  class="label" for="title">Title</label>
       
    </div>


    <div class="field">
        <label  class="label" for="content" >Content</label>
    </div>
        <div class="featured">
            <textarea class="radio" name="featured" placeholder="{{$articles->description}}">{{$articles->description}}</textarea>
        </div>
    

    
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update</button>
        </div>
    </div>

</form>

<br>

<!-- DELETE BUTTON -->
<form method="POST" action="/articles/{{$articles->id}}">
    {{method_field('DELETE')}}
    @csrf

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Delete</button>
        </div>
    </div>

</form>
@endsection('content')