<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'director',
        'imgUrl',
        'duration',
        'releaseDate',
        'genre',
    ];
    use HasFactory;
}
