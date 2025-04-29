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

    public function show($slug)
    {
        $articles = config('temporary.activities.articles');
        foreach ($articles as $article) {
            if ($article['slug'] === $slug) {
                return view('pages.activities.article-detail', compact('article'));
            }
        }
        abort(404);
    }
}
