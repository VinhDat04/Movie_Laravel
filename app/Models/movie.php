<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\carosel;
use App\Models\detailsmovie;

class movie extends Model
{
    protected $fillable = [
        'image',
        'title',
        'star',
        'year',
        'long',
    ];
}
