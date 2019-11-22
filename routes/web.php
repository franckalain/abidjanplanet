<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');


Route::get('/results', function(){
    $posts = \App\Post::where('title', 'like', '%' . request('query') . '%')->get();

    return view('results')->with('posts', $posts)
            ->with('title', 'Search results: ' . request('query'))
            ->with('categories', \App\Category::take(4)->get())
            ->with('query', request('query'));
});


Route::put('/backend/articles/restore/{article}', [
    'uses' => 'Backend\BlogController@restore',
    'as' => 'backend.articles.restore'
]);

Route::delete('/backend/articles/force-destroy/{article}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as' => 'backend.articles.force-destroy'
]);

Route::resource('/backend/articles', 'Backend\BlogController', ['names' => [
    'index' => 'backend.articles.index',
    'create' => 'backend.articles.create',
    'edit' => 'backend.articles.edit',
    'destroy' => 'backend.articles.destroy'
]]);

Route::resource('/backend/categories', 'Backend\CategoriesController', ['names' => [
    'index' => 'backend.categories.index',
    'create' => 'backend.categories.create']]);

Route::resource('/backend/users', 'Backend\UsersController', ['names' => [
    'index' => 'backend.users.index',
    'create' => 'backend.users.create']]);

Route::get('/backend/users/confirm/{users}', [
    'uses' => 'Backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
]);


Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login');
})->name('logout');

Route::get('/', [
    'uses' => 'BlogController@index',
    'as' => 'accueil'
]);

Route::get('/{post}', [
    'uses' => 'BlogController@show',
    'as' => 'show'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as' => 'category'
]);

Route::get('/category/{id}', [
	'uses' => 'BlogController@category',
	'as' => 'category.single'
    ]);




