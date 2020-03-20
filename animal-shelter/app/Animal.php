<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //
    protected $casts = [
        'favourite_toys' => 'array'
    ];
}
