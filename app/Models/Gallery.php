<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Gallery extends Model
{
    /**
     * Guarded Properties
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Casting Properties
     *
     * @var array
     */
    protected $casts = [
        'images' => AsArrayObject::class,
    ];

    /**
     * Accessor to get image count
     *
     * @return void
     */
    public function getImageCountAttribute()
    {
        return count($this->images ?? []);
    }
}
