@extends('layouts.app')


@section('title', $task->title)

@section('content')
    <p>
        {{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @else
        <p>There is no description</p>
    @endif

    <p>Created at: {{ $task->created_at }}</p>
    <p>Updated at: {{ $task->updated_at }}</p>

    <p>
        @if ($task->completed)
            <span style="color: green">Completed</span>
        @else
            <span style="color: red">Not completed</span>
        @endif
    </p>

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task]) }}">Edit</a>
    </div>

    <div>
        <form method='POST' action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit">{{ $task->completed ? 'Mark as incomplete' : 'Mark as complete' }}</button>
        </form>
    </div>

    <div>
        <form method='POST' action="{{ route('tasks.destroy', ['task' => $task]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
