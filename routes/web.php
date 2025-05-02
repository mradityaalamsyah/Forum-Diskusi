<?php
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ForumUser.homeForum');
})->name('home.forum');
Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/forum/comment/{id}', [ForumController::class, 'showComment'])->name('forum.comment');

Route::get('/forumuser/profile', [ProfileController::class , 'viewProfile' ])->name('forum.profile');
