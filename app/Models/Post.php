<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Author;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    // Relación con el autor
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relación con las categorías
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    // Relación con las etiquetas
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    // Relación con los comentarios
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
    // // Relación con las categorías
    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class, 'post_category');
    // }
}
