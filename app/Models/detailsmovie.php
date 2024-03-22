<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailsmovie extends Model
{
    protected $fillable = [
        'image',
        'details1',
        'title',
        'year',
        'details2',
        'genres1',
        'genres2',
        'audio',
        'subtitle',
        'actor',
    ];
}
