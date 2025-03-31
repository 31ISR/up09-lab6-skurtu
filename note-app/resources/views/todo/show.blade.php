<x-layout>
    <div class="container">
        <h1 class="task-title">Task Details</h1>
        <div class="task-card {{ $todo->urgent ? 'urgent' : '' }} {{ $todo->done ? 'done' : '' }}">
            <div class="task-name">
                {{ $todo->name }}
                @if ($todo->urgent)
                    <span class="urgent-label">!</span>
                @endif
                @if ($todo->done)
                    <span class="done-label">✔</span>
                @endif
            </div>
            <div class="task-status">
                Статус: {{ $todo->done ? 'Выполнена' : 'Не выполнена' }}
            </div>
            <div class="task-urgent">
                Срочность: {{ $todo->urgent ? 'Срочная' : 'Обычная' }}
            </div>
            @if ($todo->done && $todo->dateCompleted)
                <div class="task-completed">
                    Завершено: {{ $todo->dateCompleted instanceof \Carbon\Carbon ? $todo->dateCompleted->format('d.m.Y') : \Carbon\Carbon::parse($todo->dateCompleted)->format('d.m.Y') }}
                </div>
            @endif
        </div>
        <a href="{{ route('todo.index') }}" class="action-link">Назад</a>
    </div>
</x-layout>