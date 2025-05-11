<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Gallery;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Show Index Activity Article Page
     *
     * @return mixed
     */
    public function indexArticle()
    {
        $articles = Article::where('is_active', true)
            ->orderByDesc('sort_order')->get();
        $banner = Banner::where('slug', 'activity-article')->firstOrFail();

        return view('pages.activities.article.index', compact('banner', 'articles'));
    }

    /**
     * Show detail Activity Article Page
     *
     * @return mixed
     */
    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('pages.activities.article.detail', compact('article'));
    }

    /**
     * Show Index Activity Gallery Page
     *
     * @return mixed
     */
    public function indexGallery()
    {
        $galleries = Gallery::orderByDesc('created_at')->get();
        $banner = Banner::where('slug', 'activity-gallery')->firstOrFail();

        return view('pages.activities.gallery.index', compact('banner', 'galleries'));
    }

    /**
     * Show detail Activity Gallery Page
     *
     * @return mixed
     */
    public function showGallery($slug)
    {
        $gallery = Gallery::where('slug', $slug)
            ->orderByDesc('created_at')->firstOrFail();

        return view('pages.activities.gallery.detail', compact('gallery'));
    }
}
