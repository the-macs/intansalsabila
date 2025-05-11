<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class CompanyInfo extends Model
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
        'phone' => AsArrayObject::class,
        'email' => AsArrayObject::class,
        'fax' => AsArrayObject::class,
        'working_hours' => AsArrayObject::class,
        'company_logo' => AsArrayObject::class,
        'regulation' => AsArrayObject::class,
    ];
}
