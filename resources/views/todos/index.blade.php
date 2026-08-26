<h1 class="mb-5">Todo-Boi</h1>

@if (session('success'))
    <p class="mb-5 text-green-600 text-3xl">{{ session('success') }}</p>
@endif

<h3 class="mb-5"><a href="{{ route('todos.create') }}">Create Todo</a></h3>
<ul>
    @foreach ($todos as $todo)
        <a href="{{ route('todos.show', $todo) }}">
            <li>{{ $todo->title }}</li>
        </a>
    @endforeach
</ul>


