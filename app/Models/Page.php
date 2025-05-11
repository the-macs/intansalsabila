<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Page extends Model
{
    /**
     * Fillable Properties
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'content'
    ];

    /**
     * Casting Properties
     *
     * @var array
     */
    protected $casts = [
        'content' => AsArrayObject::class,
    ];
}
