@extends('layout')

@section('content')

<form method="POST" action="/projects/{{ $project->id }}">
    {{ method_field('PATCH') }}
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" value="{{ $project->title }}" required >
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea class="textarea" name="description" required>{{ $project->description }}</textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update project</button>
        </div>
    </div>

    @if($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
    @endif

    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete project</button>
            </div>
        </div>
    </form>


@endsection