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

        $latest_umrah_package = $this->getDataUmrah();

        $banner = Banner::where('slug', 'home')->firstOrFail();

        $testimonials = Testimonial::orderByDesc('sort_order')->get();

        return view('pages.home', compact('latest_hajj_package', 'latest_umrah_package', 'banner', 'testimonials'));
    }

    public function getDataUmrah()
    {
        // Try to get the nearest future event
        $umrah = PackageUmrah::where('embarkation', '>', now())
            ->orderBy('embarkation', 'asc')
            ->first();

        // If no future event found, get the latest past event
        if (!$umrah) {
            $umrah = PackageUmrah::where('embarkation', '<=', now())
                ->orderBy('embarkation', 'desc')
                ->first();
        }

        return $umrah;
    }
}
