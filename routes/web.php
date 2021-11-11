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


/* USUARIOS */
/* index lista */

/* Usuarios*/
/* get obtenemos los  datos en BD del usuario con la funcion index*/
Route::get('/users','UserController@index');
/* store guarda datos en BD */
Route::post('/users', 'UserController@store')->name('user.store');
/* Delete elima datos */
Route::delete('/users/{user}' ,'UserController@delete')->name('user.destroy');

/* Categorias */

Route::get('/category','CategoryController@index');
Route::post('/categories','CategoryController@store')->name('category.store');
Route::delete('/categories/{category}','CategoryController@delete')->name('category.destroy');

/* Articulos */

Route::get('/articles','ControllerArticle@index');
Route::post('/articles','ControllerArticle@store')->name('article.store');
Route::delete('/articles/{article}','ControllerArticle@delete')->name('article.destroy');


/*  Images */

Route::post('/images', 'ImagesController@store')->name('images.store');
/* Auth Routes */
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
