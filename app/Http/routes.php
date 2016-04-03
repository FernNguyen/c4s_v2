<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $data = array(
        'home_page' => true
    );
    return view('pages.home')->with('data', $data);
});


Route::get('category/{slug}', ['as'=>'frontend.article.getCat', 'uses'=>'ArticleController@getCat']);


Route::get('{category}', ['as'=>'frontend.article.getList', 'uses'=>'ArticleController@getArticle']);
Route::get('{slug}.html', ['as'=>'frontend.article.getList', 'uses'=>'ArticleController@getArticle']);

Route::group(array('before' => 'auth'), function ()
{
    Route::get('/laravel-filemanager', 'TsawlerLaravelfilemanagercontrollersLfmController@show');
    Route::post('/laravel-filemanager/upload', 'TsawlerLaravelfilemanagercontrollersLfmController@upload');
    // list all lfm routes here...
});


    Route::group(['prefix'=>'backend','middleware' => 'auth'], function(){
       Route::group(['prefix'=>'category'], function(){
           Route::get('list', ['as'=>'backend.category.getList', 'uses'=>'CategoryController@getList']);
           Route::get('add', ['as'=>'backend.category.getAdd', 'uses'=>'CategoryController@getAdd']);
           Route::post('add', ['as'=>'backend.category.postAdd', 'uses'=>'CategoryController@postAdd']);
           Route::get('del/{id}', ['as'=>'backend.category.getDel', 'uses'=>'CategoryController@getDel']);
           Route::get('edit/{id}', ['as'=>'backend.category.getEdit', 'uses'=>'CategoryController@getEdit']);
       });
       Route::group(['prefix'=>'article'], function(){
           Route::get('list', ['as'=>'backend.article.getList', 'uses'=>'ArticleController@getList']);
           Route::get('add', ['as'=>'backend.article.getAdd', 'uses'=>'ArticleController@getAdd']);
           Route::post('add', ['as'=>'backend.article.postAdd', 'uses'=>'ArticleController@postAdd']);
           Route::get('del/{id}', ['as'=>'backend.article.getDel', 'uses'=>'ArticleController@getDel']);
           Route::get('edit/{id}', ['as'=>'backend.article.getEdit', 'uses'=>'ArticleController@getEdit']);
           Route::post('edit/{id}', ['as'=>'backend.article.postEdit', 'uses'=>'ArticleController@postEdit']);

       });
       Route::group(['prefix'=>'user'], function(){
           Route::get('list', ['as'=>'backend.user.getList', 'uses'=>'UserController@getList']);
           Route::get('add', ['as'=>'backend.user.getAdd', 'uses'=>'UserController@getAdd']);
           Route::post('add', ['as'=>'backend.user.postAdd', 'uses'=>'UserController@postAdd']);
           Route::get('del/{id}', ['as'=>'backend.user.getDel', 'uses'=>'UserController@getDel']);
       });
    });



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

