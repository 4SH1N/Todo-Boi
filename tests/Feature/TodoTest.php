<?php

use App\Models\Todo;
use Database\Factories\TodoFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('todos index page can be displayed', function () {
    # $response = $this->get('/');
    Todo::factory()->create();

    $response = $this->get('/todos');
    $response->assertSuccessful();

    # $response->assertStatus(200);
});

test('a todo can be displayed', function () {
    $todo = Todo::factory()->create([
        'title' => 'Learn Laravel',
    ]);

    $response = $this->get("/todos/{$todo->id}");

    $response->assertSuccessful()->assertSee('Learn Laravel');
});

test('a todo can be created', function () {
    $response = $this->post('/todos', [
        'title' => 'Learn Laravel',
        'description' => 'Build a Todo application',
        'completed' => false,
    ]);

    $response->assertRedirect('/todos');

    $this->assertDatabaseHas('todos', [
        'title' => 'Learn Laravel',
        'description' => 'Build a Todo application',
        'completed' => false,
    ]);
});

test('todo title is required', function () {
    $response = $this->post('/todos', [
        'description' => 'A todo without a title',
        'completed' => false,
    ]);

    $response->assertSessionHasErrors('title');
});

test('a todo can be updated', function () {
    $todo = Todo::factory()->create([
        'title' => 'Old title',
        'completed' => false,
    ]);

    $response = $this->put("/todos/{$todo->id}", [
        'title' => 'New title',
        'description' => 'Updated description',
        'completed' => true,
    ]);

    $response->assertRedirect("/todos/{$todo->id}");

    $this->assertDatabaseHas('todos', [
        'id' => $todo->id,
        'title' => 'New title',
        'description' => 'Updated description',
        'completed' => true,
    ]);
});

test('a todo can be deleted', function () {
    $todo = Todo::factory()->create();

    $response = $this->delete("/todos/{$todo->id}");

    $response->assertRedirect('/todos');

    $this->assertDatabaseMissing('todos', [
        'id' => $todo->id,
    ]);
});
