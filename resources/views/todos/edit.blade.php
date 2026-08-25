<h1 class="mb-10">Edit Todos</h1>

<form method="POST" action="{{ route('todos.update', $todo) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $todo->title) }}">
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="20" cols="20">
        {{ old('description', $todo->description) }}</textarea>
        @error('description')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="completed">
            <input type="checkbox" id="completed" name="completed"
            value="1" {{ old('completed', $todo->completed) ? 'checked' : '' }}>
            completed
        </label>
    </div>

    <button type="submit">Update Todo</button>
</form>
