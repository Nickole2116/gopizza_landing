<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Member routes
Route::controller(MemberController::class)->group(function () {
    Route::get('/', 'home')->name('member.main');
    Route::get('/home', 'home')->name('member.home');
    Route::get('/story', 'story')->name('member.story');
    Route::get('/contact', 'contact')->name('member.contact');
    Route::get('/menu', 'menu')->name('member.menu');
    Route::get('/event', 'event')->name('member.event');
});

// Admin routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
});
