<?php

namespace App\Http\Controllers;

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
        return view('pages.packages.hajj.index', [
            'hajj_packages' => config('temporary.packages.hajj')
        ]);
    }

    /**
     * Show Index Hajj Packages Page
     *
     * @return mixed
     */
    public function indexUmrah()
    {
        return view('pages.packages.umrah.index', [
            'umrah_packages' => config('temporary.packages.umrah')
        ]);
    }
}
