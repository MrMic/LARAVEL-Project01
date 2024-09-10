@extends('layouts.app')

@section('title', 'The list of Tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}"
            class="font-medium bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md hover:text-gray-900">Add
            Task</a>
    </nav>
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class([
                'line-through text-gray-500' => $task->completed,
            ])>{{ $task->title }}</a>
        </div>
    @empty
        <li>No tasks found</li>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
