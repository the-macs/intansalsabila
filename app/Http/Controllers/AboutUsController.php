<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Show Index Page
     *
     * @return void
     */
    public function index()
    {
        return view('pages.about-us');
    }
}
