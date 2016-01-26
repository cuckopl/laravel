<?php

use App\Http\Controllers\Admin\EmailsController;

Route::group(['middleware' => ['acl', 'activity_log']], function() {

    Route::model('tasks', 'Task');
    Route::model('projects', 'Project');
//kolejnośc jest ważna
//Route::get('/', 'HomePageController@index');
    Route::get('/', ['uses' => 'HomePageController@index']);

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

//Home page controller 
//articles
//Route::get('articles',      'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit','ArticlesController@edit');

    Route::Resource('articles', 'ArticlesController');


//Upload Route

    Route::any('media', 'FileUploadController@index');
    Route::any('store-media', 'FileUploadController@storeMedia');


    Route::any('/products', 'RestController@getProducts');


//Admin routing 
});




Route::group(['namespace' => 'Admin', 'middleware' => ['acl', 'activity_log'], 'prefix' => '/admin'], function() {
// controller admin 
    Route::get('/', ['as' => 'adminIndex', 'uses' => 'AdminController@index']);
    Route::get('/dashboard', ['as' => 'adminDashboard', 'uses' => 'AdminController@dashboard']);



// User COntroller
    Route::get('/user', ['as' => 'userIndex', 'uses' => 'UserController@listUsers']);
    Route::get('/user/get-user/{id}', ['as' => 'getUser', 'uses' => 'UserController@get'])->where('id', '[0-9]+');
    Route::post('/user/get-user/{id}', ['as' => 'updateUser', 'uses' => 'UserController@update'])->where('id', '[0-9]+');
    Route::get('/user/add-user', ['as' => 'addUser', 'uses' => 'UserController@add']);
    Route::put('/user/get-user', ['as' => 'createUser', 'uses' => 'UserController@store']);
    Route::delete('/user/get-user/{id}', ['as' => 'destroyUser', 'uses' => 'UserController@destroy'])->where('id', '[0-9]+');

//ACL role controller 
    Route::get('/acl/get-roles', ['as' => 'aclRoleIndex', 'uses' => 'AclRoleController@index']);
    Route::get('/acl/role', ['as' => 'getAclRole', 'uses' => 'AclRoleController@create']);
    Route::post('/acl/role', ['as' => 'addAclRole', 'uses' => 'AclRoleController@store']);
    Route::put('/acl/role/{id}', ['as' => 'updateAclRole', 'uses' => 'AclRoleController@update'])->where('id', '[0-9]+');
    Route::get('/acl/role/edit/{id}', ['as' => 'editAclRole', 'uses' => 'AclRoleController@edit'])->where('id', '[0-9]+');
    Route::delete('/acl/role/{id}', ['as' => 'destroyAclRole', 'uses' => 'AclRoleController@destroy'])->where('id', '[0-9]+');
//PERMISSION controller
    Route::get('/acl/get-premission', ['as' => 'aclPremissionIndex', 'uses' => 'PermissionController@index']);
    Route::get('/acl/premission', ['as' => 'getAclPremission', 'uses' => 'PermissionController@create']);
    Route::post('/acl/premission', ['as' => 'addAclPremission', 'uses' => 'PermissionController@store']);
    Route::put('/acl/premission/{id}', ['as' => 'updateAclPremission', 'uses' => 'PermissionController@update'])->where('id', '[0-9]+');
    Route::get('/acl/premission/edit/{id}', ['as' => 'editAclPremission', 'uses' => 'PermissionController@edit'])->where('id', '[0-9]+');
    Route::delete('/acl/premission/{id}', ['as' => 'destroyAclPremission', 'uses' => 'PermissionController@destroy'])->where('id', '[0-9]+');
    Route::get('/acl/premission/refresh-routes', ['as' => 'refreshPermissionRoutes', 'uses' => 'PermissionController@createPerrmisionRoutes']);
// USER activity controller ONLY SHOW TABLE 

    Route::get('/user-activity/index', ['as' => 'userActivityIndex', 'uses' => 'UserActivityController@index']);
    Route::get('/user-activity/get-table', ['as' => 'userActivitygetTableData', 'uses' => 'UserActivityController@getTableData']);
//CHAT controller 
    Route::get('/chat/index', ['as' => 'chatIndex', 'uses' => 'ChatController@index']);
// CODE BUILDER    Controller
    Route::get('/code-builder/index', ['as' => 'codeBuilderIndex', 'uses' => 'CodeBuilderConttroller@index']);
    Route::get('/code-builder/create', ['as' => 'codeBuilderCreate', 'uses' => 'CodeBuilderConttroller@create']);
    Route::post('/code-builder', ['as' => 'codeBuilderStore', 'uses' => 'CodeBuilderConttroller@store']);
    Route::get('/code-builder/dataTable', ['as' => 'codebuilderDataTable', 'uses' => 'CodeBuilderConttroller@dataTable']);

    //load dynamic routes
   // \App\Model\DynamicRoutes::loadDataBaseRoutes();

//DATA TABLE route group
    Route::group(['namespace' => 'TableControllers', 'middleware' => ['acl'], 'prefix' => '/table'], function() {
        //Permision table role controller
        Route::get('/acl/get-permission-table', ['as' => 'aclGetPremissionTable', 'uses' => 'PermissionTableController@getPermissionTable']);
        //acl table role controller 
        Route::get('/acl/get-role-table', ['as' => 'aclGetRoleTable', 'uses' => 'AclRoleTableController@getRoleTable']);
        //user table Cotroller
        Route::get('/user/get-users-data', ['as' => 'getUsersData', 'uses' => 'UserTableController@getUsersData']);
    });
});


