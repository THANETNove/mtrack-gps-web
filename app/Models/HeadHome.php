<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeadHome extends Model
{
    protected $fillable = [
        'image',
        'url',
        'details',
    ];
}