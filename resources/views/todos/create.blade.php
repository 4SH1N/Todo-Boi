<h1 class="mb-10">Create Todos</h1>

@if ($errors->any())
    <div>
        <h2 class="mb-2">There were some errors:</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('todos.store') }}">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text"  id="title" name="title" value="{{ old('title') }}" >
        @error('title')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="20" cols="20">{{ old('description') }}</textarea>
        @error('description')
            {{ $message }}
        @enderror
    </div>

    <button type="submit">Create Todo</button>
</form>

<a href="{{ route('todos.index') }}">Back to Todos</a>
