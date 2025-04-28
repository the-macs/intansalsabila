<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latest_hajj_package = config('temporary.packages.hajj.0');
        $latest_umrah_package = config('temporary.packages.umrah.0');

        return view('pages.home', compact('latest_hajj_package', 'latest_umrah_package'));
    }
}
