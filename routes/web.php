<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/hello', [WelcomeController::class, 'helo']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID) {
    return 'Pos ke-'.$postID." Komentar ke-: ".$commentID;
});

Route::get('/user/profile', function () {
    //
})->name('profile');

Route::resource('photos', PhotoController::class)
->only([ 
    'index', 'show' 
]); 

Route::resource('photos', PhotoController::class)
->except([ 
    'create', 'store', 'update', 'destroy' 
]); 
