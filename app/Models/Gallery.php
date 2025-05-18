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
        'media' => AsArrayObject::class,
    ];

    /**
     * Accessor to get image count
     *
     * @return void
     */
    public function getImageCountAttribute()
    {
        return count($this->media->images ?? []);
    }

    /**
     * Accessor to get image count
     *
     * @return void
     */
    public function getVideoCountAttribute()
    {
        return count($this->media->videos ?? []);
    }

    /**
     * Checking video or image
     */
    public function isVideo($file)
    {
        return preg_match('/\.(mp4|mov|avi)$/i', $file);
    }
}
