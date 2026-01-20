<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Factories\HasFactory;

class Director extends Model
{
    // use HasFactory;

    protected $fillable = [
        'name',
        'biography',
        'birth_date',
    ];
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}

