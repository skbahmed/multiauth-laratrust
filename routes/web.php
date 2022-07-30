<?php

use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// COMMON ROUTES
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ADMIN ROUTES
Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/manage-user', [DashboardController::class, 'manageUser'])->name('dashboard.manage-user');
});

// USER ROUTES
Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
});

// BLOGGER ROUTES
Route::group(['middleware' => ['auth', 'role:blogger']], function(){
    Route::get('/dashboard/create-post', [DashboardController::class, 'createPost'])->name('dashboard.create-post');
});

require __DIR__.'/auth.php';
