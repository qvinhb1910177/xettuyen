<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [HomeControler::class, 'checkUserType']);

Route::get('/admin/dashboard', function () {
    return view('admin/admin_dashboard');
})->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('user/user_dashboard');
})->name('user.dashboard');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
