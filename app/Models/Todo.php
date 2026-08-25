<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Override;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'completed'
    ];

    #[Override]
    protected function casts(): array
    {
        return [
            'completed' => 'boolean',
        ];
    }

    public function scopeIncomplete($query)
    {
        return $query->where('completed', false);
    }
}
