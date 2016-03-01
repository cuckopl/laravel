<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $articlesTop = \App\Article::latest('published_at')->published()->limit(8)->get();
        $articlesRandom= \App\Article::latest('published_at')->published()->orderByRaw("RAND()")->limit(3)->get();
        $comments= \App\ArticleComments::latest('created_at')->limit(6)->get();
        return view('front/views/index/index');
    }

}
