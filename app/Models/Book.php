<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'image_url', 'isbn', 'title'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
