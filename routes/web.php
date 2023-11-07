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

Route::get('halo', function() {
    return "Halo, selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function() {
    return"<h1>Halo apa kabar</h1>";
});

Route::get('blog', function() {
    return view('blog');
});

Route::get('/hello', function() {
    return view('hello');
});

Route::get('/style', function() {
    return view('style');
});

Route::get('/link', function() {
    return view('link');
});

Route::get('/layout5026221112', function() {
    return view('layout5026221112');
});

Route::get('/js1', function() {
    return view('js1');
});

Route::get('/js2', function() {
    return view('js2');
});

Route::get('/clonelinktree5026221112', function() {
    return view('clonelinktree5026221112');
});

Route::get('/validasi', function() {
    return view('validasi');
});

Route::get('/5026221112', function() {
    return view('5026221112');
});

Route::get('/responsive', function() {
    return view('responsive');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
