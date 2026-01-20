<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_year',
        'genre',
        'director',
        'rating',
        'director_id',
    ];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
