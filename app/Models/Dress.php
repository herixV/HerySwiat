<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    /** @use HasFactory<\Database\Factories\DressFactory> */
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'dress_tag');
    }
}
