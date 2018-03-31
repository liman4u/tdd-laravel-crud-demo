<?php

namespace App\Carousels;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        'title',
        'link',
        'src'
    ];
}
