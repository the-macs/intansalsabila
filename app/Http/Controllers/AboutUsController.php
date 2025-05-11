<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Certification;

class AboutUsController extends Controller
{
    /**
     * Show Index Page
     *
     * @return void
     */
    public function index()
    {
        $banner = Banner::where('slug', 'about-us')->firstOrFail();
        $certifications = Certification::orderBy('sort_order')->get();

        return view('pages.about-us', compact('banner', 'certifications'));
    }
}
