<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DenunciationsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/landing_page', function () {
    return view('landing_page');
});
Route::get('/denunciation', function () {
    return view('requests');
});




Route::get('/suivre_votre_demande', 'App\Http\Controllers\AnonymousLoginController@getLoginForm')->name('get.anonymous.login');
Route::post('post_anonymous_login', 'App\Http\Controllers\AnonymousLoginController@login')->name('post.anonymous.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/chat_discussion', function () {
        return view('chat-discussion');
    });

    Route::get('/user_dashboard', function () {
        return view('user-dashboard');
    });
    Route::get('/admin_dashboard', function () {
        return view('admin-dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::resource('denunciations', DenunciationsController::class);

