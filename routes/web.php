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

    $footerLinks = config("footerlinks");
    $comics = config("comics");

    return view('home', compact('footerLinks') , compact('comics'));
});

Route::get('/{id}', function ($id) {
    $comics = config("comics");
    $footerLinks = config("footerlinks");

    $foundComic = null;

    foreach ($comics as $i => $comic) {
        if ($comic["id"] === intval($id)) {
            $foundComic = $comic;
            break;
        }
    }

    if (is_null($foundComic)) {
        abort('404');
    }

    return view("comics.show",compact('footerLinks') ,
        [
            "comic" => $foundComic
        ]
    );
})->name("comics.show");

Route::get('/characters', function () {
    
    $footerLinks = config("footerlinks");
    $comics = config("comics");

    return view('characters', compact('footerLinks') , compact('comics'));

})->name('characters');

Route::get('/comics', function () {

    return view('comics');

})->name('comics');

Route::get('/movies', function () {

    return view('movies');

})->name('movies');

Route::get('/tv', function () {

    return view('tv');

})->name('tv');

Route::get('/games', function () {

    return view('games');

})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles');

})->name('collectibles');

Route::get('/videos', function () {

    return view('videos');

})->name('videos');

Route::get('/fans', function () {

    return view('fans');

})->name('fans');

Route::get('/news', function () {

    return view('news');

})->name('news');

Route::get('/shop', function () {

    return view('shop');

})->name('shop');
