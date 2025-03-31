<x-layout>
    <div class="container">
        <h1 class="task-title">Edit task</h1>
        <form action="{{ route('todo.update', $todo) }}" method="POST" class="task-form">
            @csrf
            @method('PUT')
            <input type="text" name="name" placeholder="Enter task name" class="task-input" value="{{ $todo->name }}">
            <label class="urgent-checkbox">
                <input type="checkbox" name="urgent" {{ $todo->urgent ? 'checked' : '' }}>
                Urgent
            </label>
            <label class="done-checkbox">
                <input type="checkbox" name="done" {{ $todo->done ? 'checked' : '' }}>
                Done
            </label>
            @if ($todo->done)
                <div class="completed-date">
                    Завершено: {{ $todo->dateCompleted ? ($todo->dateCompleted instanceof \Carbon\Carbon ? $todo->dateCompleted->format('d.m.Y') : \Carbon\Carbon::parse($todo->dateCompleted)->format('d.m.Y')) : 'N/A' }}
                </div>
            @endif
            <div class="form-actions">
                <a href="{{ route('todo.index') }}" class="action-link cancel-link">Cancel</a>
                <button class="submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>