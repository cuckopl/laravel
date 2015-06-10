<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tag;

class TagsController extends Controller {

    public function show(Tag $tag) {
        $articles = $tag->articles()->latest('published_at')->published()->paginate(3);
        return view('articles.index',  compact('articles'));
    }

}
