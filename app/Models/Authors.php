<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorsFactory> */
    use HasFactory;

    // Relación con los posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
