<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\PackageHajj;
use App\Models\PackageUmrah;
use App\Models\Testimonial;
use PHPUnit\Event\Code\Test;

class HomeController extends Controller
{
    public function index()
    {
        $latest_hajj_package = PackageHajj::where('is_active', true)->orderByDesc('sort_order')->firstOrFail();
        $latest_umrah_package = PackageUmrah::where('is_active', true)->orderByDesc('sort_order')->firstOrFail();

        $banner = Banner::where('slug', 'home')->firstOrFail();

        $testimonials = Testimonial::orderByDesc('sort_order')->get();

        return view('pages.home', compact('latest_hajj_package', 'latest_umrah_package', 'banner', 'testimonials'));
    }
}
