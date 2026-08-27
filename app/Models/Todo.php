<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'completed',
    ];

    #[Override]
    protected function casts(): array
    {
        return [
            'completed' => 'boolean',
        ];
    }

    public function scopeIncomplete(Builder $query): Builder
    {
        return $query->where('completed', false);
    }
}
