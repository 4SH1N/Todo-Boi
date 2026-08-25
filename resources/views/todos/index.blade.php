<h1 class="mb-5">Todo-Boi</h1>
<ul>
    @foreach ($todos as $todo)
        <li>{{ $todo->title }}</li>
    @endforeach
</ul>


