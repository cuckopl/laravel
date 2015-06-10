<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::get('foo', 'FooController@foo');


Route::model('tasks', 'Task');
Route::model('projects', 'Project');
//kolejnośc jest ważna
Route::get('/', 'ArticlesController@index');

//Route::get('foo',  function(){
//    return ' This is foo view';
//}
//);


Route::post('comments/get', 'ArticleCommentsController@get');
Route::post('comments/add', 'ArticleCommentsController@add');
Route::get('tags/{tags}', 'TagsController@show');
Route::get('home', 'HomeController@index');

Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



//articles
//Route::get('articles',      'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit','ArticlesController@edit');

Route::Resource('articles', 'ArticlesController');



