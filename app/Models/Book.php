<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'description', 'author_id', 'genre_id', 'poster'];

    public function genre() {
         return $this->hasOne('App\Models\Genre');
    }
}
