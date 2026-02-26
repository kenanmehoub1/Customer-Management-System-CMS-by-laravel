<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin'], function() {

       Route::get('/home/{id}', [App\Http\Controllers\Admin\AdminAuth::class, 'home']);
       Route::any('/logout', [App\Http\Controllers\Admin\AdminAuth::class, 'logout']);
       

    });

    Route::get('/verify', [App\Http\Controllers\Admin\AdminAuth::class, 'verifyEmailCode']);

    Route::get('/login', [App\Http\Controllers\Admin\AdminAuth::class, 'login']);
    Route::post('/login', [App\Http\Controllers\Admin\AdminAuth::class, 'doLogin']);
    Route::get('/register', [App\Http\Controllers\Admin\AdminAuth::class, 'registerPage']);
    Route::post('/register', [App\Http\Controllers\Admin\AdminAuth::class, 'register']); // مرة واحدة فقط


    Route::get('/forgot/password', [App\Http\Controllers\Admin\AdminAuth::class, 'forgot_password']);
    Route::post('/forgot/password', [App\Http\Controllers\Admin\AdminAuth::class, 'doForgot_password']);
    Route::get('/Change/password', [App\Http\Controllers\Admin\AdminAuth::class, 'ChangePassword']);
    Route::put('/Changes/password/{id}', [App\Http\Controllers\Admin\AdminAuth::class, 'doChangePassword'])->name('change');
});


