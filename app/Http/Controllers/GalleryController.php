<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.activities.gallery', [
            'galleries' => config('temporary.activities.galleries')
        ]);
    }

    public function show($gallery)
    {
        $data = config('temporary.activities.galleries');

        return view('pages.activities.gallery-detail', [
            'gallery_images' => collect($data)->firstWhere('slug', $gallery)
        ]);
    }
}
