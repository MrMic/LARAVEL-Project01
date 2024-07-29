<div>
    Hello I am a Blade Template
</div>

<div>
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <li>No tasks found</li>
    @endforelse
</div>
