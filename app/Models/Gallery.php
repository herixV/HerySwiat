<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /** @use HasFactory<\Database\Factories\GalleryFactory> */
    use HasFactory;

    // Relación con la tabla categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación polimórfica
    // public function imageable()
    // {
    //     return $this->morphTo();
    // }
}
