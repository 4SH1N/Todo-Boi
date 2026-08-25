<h1 class="mb-10">Create Todos</h1>

<form method="POST" action="{{ route('todos.store') }}">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text"  id="title" name="title">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="20" cols="20"></textarea>
    </div>

    <button type="submit">Create Todo</button>
</form>

<a href="{{ route('todos.index') }}">Back to Todos</a>
