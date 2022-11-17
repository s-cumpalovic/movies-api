<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'director',
        'imgUrl',
        'duration',
        'releaseDate',
        'genre',
    ];

    public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', '%' . $title . '%');
    }
}
