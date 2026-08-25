<h1 class="mb-5">Todo-Boi</h1>
<h3 class="mb-5"><a href="{{ route('todos.create') }}">Create Todo</a></h3>
<ul>
    @foreach ($todos as $todo)
        <a href="{{ route('todos.show', $todo) }}">
            <li>{{ $todo->title }}</li>
        </a>
    @endforeach
</ul>


