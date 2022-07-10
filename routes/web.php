<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', fn () => view('index'));
Route::get('/gallery', fn () => view('gallery'));

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
});

Route::prefix('/account')->controller(AccountController::class)->group(function(){
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/forgotPassword', 'forgotPassword');
    Route::get('/manage', 'manage');
});

Route::prefix('/admin')->controller(AdminController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/galleries', 'galleries');
    Route::get('/tags', 'tags');
});
