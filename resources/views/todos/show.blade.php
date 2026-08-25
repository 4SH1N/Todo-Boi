<h1 class="mb-2">{{ $todo->title }}</h1>
<p class="mb-2">{{ $todo->description }}</p>
<p>Status: {{ $todo->completed ? 'Completed' : 'Pending' }}</p>

<a href="{{ route('todos.edit', $todo) }}" class="mb-3">Edit</a>
<a href="{{ route('todos.index') }}">Back to Todos</a>

