<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BranchOffice;

class ContactController extends Controller
{
    /**
     * Show index page
     *
     * @return void
     */
    public function index()
    {
        $banner = Banner::where('slug', 'contact')->firstOrFail();
        $branches = BranchOffice::all();

        return view('pages.contact', compact('branches', 'banner'));
    }
}
