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

Route::put('/backend/articles/restore/{article}', [
    'uses' => 'Backend\BlogController@restore',
    'as' => 'backend.articles.restore'
]);

Route::resource('/backend/articles', 'Backend\BlogController', ['names' => [
    'index' => 'backend.articles.index',
    'create' => 'backend.articles.create',
    'edit' => 'backend.articles.edit',
    'destroy' => 'backend.articles.destroy'
]]);


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




