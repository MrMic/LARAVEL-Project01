@extends('layouts.app')

@section('title', 'The list of Tasks')

@section('content')
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <li>No tasks found</li>
    @endforelse
@endsection
