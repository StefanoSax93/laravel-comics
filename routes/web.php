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
})->name('home');

Route::get('/characters', function () {
    
    $footerLinks = config("footerlinks");
    $comics = config("comics");

    return view('characters', compact('footerLinks') , compact('comics'));

})->name('characters');

Route::get('/comics', function () {

    echo 'comics';

})->name('comics');

Route::get('/movies', function () {

    echo 'movies';

})->name('movies');

Route::get('/tv', function () {

    echo 'tv';

})->name('tv');

Route::get('/games', function () {

    echo 'games';

})->name('games');

Route::get('/collectibles', function () {

    echo 'collectibles';

})->name('collectibles');

Route::get('/videos', function () {

    echo 'videos';

})->name('videos');

Route::get('/fans', function () {

    echo 'fans';

})->name('fans');

Route::get('/news', function () {

    echo 'news';

})->name('news');

Route::get('/shop', function () {

    echo 'shop';

})->name('shop');

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
