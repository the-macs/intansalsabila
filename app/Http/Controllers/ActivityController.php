<?php

namespace App\Http\Controllers;

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
        $articles = config('temporary.activities.articles');

        return view('pages.activities.article.index', compact('articles'));
    }

    /**
     * Show detail Activity Article Page
     *
     * @return mixed
     */
    public function showArticle($slug)
    {
        $articles = config('temporary.activities.articles');
        foreach ($articles as $article) {
            if ($article['slug'] === $slug) {
                return view('pages.activities.article.detail', compact('article'));
            }
        }
        abort(404);
    }

    /**
     * Show Index Activity Gallery Page
     *
     * @return mixed
     */
    public function indexGallery()
    {
        return view('pages.activities.gallery.index', [
            'galleries' => config('temporary.activities.galleries')
        ]);
    }

    /**
     * Show detail Activity Gallery Page
     *
     * @return mixed
     */
    public function showGallery($gallery)
    {
        $data = config('temporary.activities.galleries');

        return view('pages.activities.gallery.detail', [
            'gallery_images' => collect($data)->firstWhere('slug', $gallery)
        ]);
    }
}
