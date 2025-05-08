<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show index page
     *
     * @return void
     */
    public function index()
    {
        return view('pages.contact');
    }
}
