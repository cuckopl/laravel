<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ArticleComments;

class ArticleCommentsController extends Controller {

/**
 * get comments ,take 
 * @param Request $request
 * @return string
 */
    public function get(Request $request) {


        $articleComments = \App\ArticleComments::latest()->where('article_id', $request->input('articleId'))->
                        take($request->input('amount'))->get();
        $render = \Illuminate\Support\Facades\View::make(
                        'ajax.comments.simple_comment', array('articleComments' => $articleComments)
        );
        return $render;
    }
/**
 * 
 * @param Request $request
 * @return string
 */
    public function add(Request $request) {
        if (\Illuminate\Support\Facades\Auth::guest()) {
            return;
        }
        $comments = \App\ArticleComments::create($request->all());
        $render = \Illuminate\Support\Facades\View::make(
                        'ajax.comments.simple_comment', array('articleComments' => array($comments))
        );
        return $render;
    }

}
