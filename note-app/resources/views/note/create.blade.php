<x-layout>
    <div class="container">
        <h1 class="edit-title">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="edit-form">
            @csrf
            <textarea name="note" rows="10" placeholder="Enter your note here" class="edit-textarea"></textarea>
            <div class="form-actions">
                <a href="{{ route('note.index') }}" class="action-link cancel-link">Cancel</a>
                <button class="submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>