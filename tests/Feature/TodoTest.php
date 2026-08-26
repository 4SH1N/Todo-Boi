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
