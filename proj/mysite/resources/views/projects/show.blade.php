@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">{{ $project->description }}</div>


    {{-- @if ($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
        <li>{{$task->description}}</li>

        @endforeach
</div>
        @endif --}}
        <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
            @csrf
            <div class="field">
                <label class="label" for="description">
                    New Task
                </label>
                <div class="control">
                    <input type="text" class="input" name="description" placeholder="New Task">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Add Task</button>
                </div>
            </div>
    </form>
        @foreach ($project->tasks as $task)
        <div>
            <form method="POST"action="/tasks/{{$task->id}}">
                @method('PATCH')
                @csrf
                <label class="checkbox {{$task->completed ? 'is-complete' : ' ' }}" for="completed">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked': ''}}>
                    {{$task->description}}
                </label>
            </form>
        </div>
        @endforeach

    <p>
       {{-- <a href="/projects/{{ $project->id }}/edit">Edit</a> --}}
       @can('update', $project)
       <p>
           <a href="/projects/{{$project->id}}/edit">Edit
        </a>
    </p>
       @endcan
    </p>
    @include('errors')
@endsection