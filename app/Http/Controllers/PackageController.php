<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Banner;
use App\Models\PackageHajj;
use App\Models\PackageUmrah;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Show Index Hajj Packages Page
     *
     * @return mixed
     */
    public function indexHajj()
    {
        $banner = Banner::where('slug', 'package-hajj')->firstOrFail();
        $hajj_packages = PackageHajj::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('pages.packages.hajj.index', compact('hajj_packages', 'banner'));
    }

    /**
     * Show Index Hajj Packages Page
     *
     * @return mixed
     */
    public function indexUmrah()
    {
        $banner = Banner::where('slug', 'package-umrah')->firstOrFail();
        $umrah_packages = PackageUmrah::where('is_active', true)
            ->orderByDesc('sort_order')
            ->get();

        return view('pages.packages.umrah.index', compact('banner', 'umrah_packages'));
    }
}
