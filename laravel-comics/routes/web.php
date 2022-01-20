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

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Comics
Route::get('/comics', function () {

    // Call array from config
    $comics = config('comics-array');

    return view('comics', [
        'comics' => $comics,
    ]);
})->name('comics');

// Comic Detail
Route::get('/comic/{id}', function($id) {
    // comics
    $comics = config('comics-array');
    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
    } else {
        abort(404);
    }

    return view('comic-detail', [
        'comic' => $comic, 
    ]);
})->name('comic-detail');

// News
Route::get('/news', function () {
    return view('news');
})->name('news');