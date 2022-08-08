<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Storage;

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
    return view('auth/login');
});

//report post
Route::get('/report/{post_id}', [App\Http\Controllers\ReportController::class, 'index'])->name('report_post');
Route::put('/report/store/{post_id}/{id}', [App\Http\Controllers\ReportController::class, 'store'])->name('report.store');


//dashboard admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard_admin');
Route::get('/admin/report', [App\Http\Controllers\AdminController::class, 'report'])->name('report');
Route::get('/admin/report/view/{post_id}/{report_id}', [App\Http\Controllers\AdminController::class, 'view'])->name('view');
Route::get('/admin/report/hide/{post_id}/{report_id}', [App\Http\Controllers\AdminController::class, 'hide'])->name('hide');
Route::get('/admin/report/delete/{post_id}/{report_id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
Route::get('/admin/posts', [App\Http\Controllers\AdminController::class, 'posts'])->name('posts');
Route::get('/admin/user/viewUser/{user_id}', [App\Http\Controllers\AdminController::class, 'viewUser'])->name('viewUser');
Route::get('/admin/user/viewPost/{post_id}', [App\Http\Controllers\AdminController::class, 'viewPost'])->name('viewPost');

//dashboard route
// Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::put('/dashboard/store/{id}', [App\Http\Controllers\DashboardController::class, 'store'])->name('store');
Route::get('/dashboard/download/{file}', [App\Http\Controllers\DashboardController::class, 'download'])->name('download');

//navigation route
Route::get('/navigation', [App\Http\Controllers\NavigationController::class, 'index'])->name('navigation');

require __DIR__.'/auth.php';

//User profile route
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user_profile');
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit_profile');
Route::put('/profile/update/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('update_profile');
Route::get('/profile/search', [App\Http\Controllers\ProfileController::class, 'search'])->name('search');

//Search profile route
// Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

//message route
Route::get('/message/{id}', [App\Http\Controllers\MessageController::class, 'index'])->name('message');
Route::get('/message/chat/{id}/{id_sender}', [App\Http\Controllers\MessageController::class, 'chat'])->name('message.chat');
Route::put('/message/store/{id_sender}/{id}', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');

//comment route
Route::get('/comment/{post_id}', [App\Http\Controllers\CommentController::class, 'index'])->name('comment');
Route::put('/comment/store/{post_id}/{id}', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
