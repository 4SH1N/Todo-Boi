<h1 class="mb-5">Todo-Boi</h1>
<ul>
    @foreach ($todos as $todo)
        <a href="{{ route('todos.show', $todo) }}">
            <li>{{ $todo->title }}</li>
        </a>
    @endforeach
</ul>


