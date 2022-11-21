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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

//Route::get('/contact', function () {
//    return view('contact');
//});
//
//Route::post('/send-contact', function () {
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return 'Send contact';
//});

//Route::match(['post', 'get'], '/contact', function(){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//});

Route::match(['post', 'get'], '/contact2', function(){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::view('/test', 'test', ['test'=>'Test data']);

Route::redirect('/test', 'about');

//Route::get('/post/{id}/{slug}',function ($id, $slug) {
//    return "Post $id $slug";
//});

Route::prefix('admin')->group(function(){
    Route::get('posts', function (){
       return "Post List";
    });
    Route::get('post/create', function (){
        return "Post Create";
    });
    Route::get('post/{id?}/edit', function ($id){
        return "Edit Post $id";
    });
});
