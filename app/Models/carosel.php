<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carosel extends Model
{
    protected $fillable = [
        'image',
        'title',
        'star',
        'year',
        'long',
    ];
}
