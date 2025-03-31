<x-layout>
    <div class="container">
        <a href="{{ route('todo.create') }}" class="new-task-link">New Task</a>
        <div class="tasks-grid">
            @foreach ($todos as $todo)
                <div class="task-card {{ $todo->urgent ? 'urgent' : '' }} {{ $todo->done ? 'done' : '' }}">
                    <div class="task-name">
                        {{ Str::words($todo->name, 10) }}
                        @if ($todo->urgent)
                            <span class="urgent-label">!</span>
                        @endif
                        @if ($todo->done)
                            <span class="done-label">✔</span>
                        @endif
                    </div>
                    @if ($todo->done && $todo->dateCompleted)
                        <div class="task-completed">
                            Завершено: {{ $todo->dateCompleted->format('d.m.Y') }}
                        </div>
                    @endif
                    <div class="task-actions">
                        <a href="{{ route('todo.show', $todo) }}" class="action-link">View</a>
                        <a href="{{ route('todo.edit', $todo) }}" class="action-link">Edit</a>
                        <form action="{{ route('todo.destroy', $todo) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $todos->links() }}
        </div>
    </div>
</x-layout>