<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/hello', function(){
    return view('laravel trainig')

})

//passing more than one dynaic route
Route::get('users/{id}/{name}', function($id, $name){
    return 'this is user '.$name.' with an id of ' .$id;
});

//loading views directly

Route::get('about', function(){
    return view('pages.about');
});

Route::get('services', function(){
    return view('pages.services');
});

*/
//using contoller to load views

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


//adding dynamic route

Route::get('/users/{id}', function($id){
    return 'this is user' .$id;
});
