<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DenunciationsController;
use App\Http\Controllers\ComplementController;
use App\Http\Controllers\RapportController;
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
    return view('requests');
})->name('welcome');

// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/landing_page', function () {
//     return view('landing_page');
// });


Route::get('/suivre_votre_demande', 'App\Http\Controllers\AnonymousLoginController@getLoginForm')->name('get.anonymous.login');
Route::post('post_anonymous_login', 'App\Http\Controllers\AnonymousLoginController@login')->name('post.anonymous.login');

Route::resource('denunciations', DenunciationsController::class)->only(['create', 'store']);


Route::middleware('auth')->group(function () {

    Route::get('/admin_dashboard', function () {
        return view('admin-dashboard');
    });

    Route::resource('rapports', RapportController::class);

    Route::get('vos_denonciations', 'App\Http\Controllers\DenunciationsController@getAdminDashboard')->name('get.admin.dashboard');
    Route::get('manager_denonciations', 'App\Http\Controllers\DenunciationsController@manageDenunciations')->name('manage.denunciations');
    Route::get('denonciations/{status}', 'App\Http\Controllers\DenunciationsController@getDenunciationByStatus')->name('get.denunciation.by.status');
    Route::post('editer_status', 'App\Http\Controllers\DenunciationsController@editStatus')->name('edit.status');

});


Route::middleware('anonymous')->group(function () {

    Route::get('/chat_discussion', function () {
        return view('chat-discussion');
    });

    Route::get('/user_dashboard', function () {
        return view('user-dashboard');
    });
    Route::resource('denunciations', DenunciationsController::class)->except(['create', 'store']);
    Route::post('annuler_denonciation', 'App\Http\Controllers\DenunciationsController@cancelDenunciation')->name('cancel.denunciation');

    Route::resource('complements', ComplementController::class);

});

require __DIR__.'/auth.php';

