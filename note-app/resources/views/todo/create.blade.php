<x-layout>
    <div class="container">
        <h1 class="task-title">Create new task</h1>
        <form action="{{ route('todo.store') }}" method="POST" class="task-form">
            @csrf
            <input type="text" name="name" placeholder="Enter task name" class="task-input" value="{{ old('name') }}">
            <label class="urgent-checkbox">
                <input type="checkbox" name="urgent" {{ old('urgent') ? 'checked' : '' }}>
                Urgent
            </label>
            <div class="form-actions">
                <a href="{{ route('todo.index') }}" class="action-link cancel-link">Cancel</a>
                <button class="submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>