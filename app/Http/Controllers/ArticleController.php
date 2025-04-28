<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //


    public function index()
    {
        $articles = config('temporary.activities.articles');

        return view('pages.activities.article', compact('articles'));
    }
}
