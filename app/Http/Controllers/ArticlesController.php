<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller {

    public function __construct() {

        $this->middleware('auth', array('only' => 'create'));
    }

    public function index() {
        $articles = Article::latest('published_at')->published()->paginate(3);
        return view('articles.index', compact('articles'));
    }

    /**
     *  
     * @param Article $article
     * @return Response
     */
    public function show(Article $article) {
        $tags = $article->tags->lists('name');
        return view('articles.show', compact('article', 'tags'));
    }

    public function create() {
        $tags = \App\Tag::lists('name', 'id');
        return view('articles.create', compact('tags'));
    }

    /**
     * 
     * @param \App\Http\Requests\CreateArticleRequest $request
     * @return Response
     */
    public function store(CreateArticleRequest $request) {

        $article = Auth::user()->articles()->save(new Article($request->all()));
        $article->tags()->attach($request->input('tag_list'));

        if ($request->hasFile('image')) {
            $this->storeArticleImage($request, $article);
        }

        \Session::flash('flash_message', 'Your article wos succesfully created');
        return redirect('articles');
    }

    /**
     * 
     * @param Article
     * @return Response
     */
    public function edit(Article $article) {
        $tags = \App\Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, CreateArticleRequest $request) {
        $article->update($request->all());
        if ($request->input('tag_list')==null){  // jak nie podam tagów to nie ma takiego elemntu jak tag_list i zwraca null
            $article->tags()->sync(array());     //nie wiem jak to lepiej rozwiazać na tą chwille 
        }else{
            $article->tags()->sync($request->input('tag_list'));
        }
       
        if ($request->hasFile('image')) {
            $this->storeArticleImage($request, $article);
        }
        return redirect('articles');
    }

    protected function storeArticleImage(Requests\Request $request, Article $article) {
        $multimedia = new \App\Multimedia(); // nie wiedziałem jak stworzyć instancje inaczej ;/
        $multimedia->storeUploadedFile($request->file('image'));
        $multimedia->addMultimedia($article->id)->save();
    }

}
