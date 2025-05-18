<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageUmrah extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Cast property
     *
     * @var array
     */
    protected $casts = [
        'embarkation' => 'date:Ymd',
    ];
}
