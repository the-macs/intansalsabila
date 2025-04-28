<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index()
    {
        return view('pages.tour-package');
    }
}
