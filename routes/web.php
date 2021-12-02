<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingController;
use App\Models\Post;
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

Route::get('/', [LandingController::class, 'index']);

Route::get('blog', [BlogController::class, 'index'] );

Route::get('/blog/{slug}', [BlogController::class, 'show']);

// Route Post
Route::resource('post', PostController::class);

Route::get('gallery', function() {
    return view('gallery');
});

Route::get('about', function() {
    $data = [
        'images' => '/images/foto.jpg',
        'nama' => 'Nama: Muhamad Randy Andrian'
    ];
    return view('about', $data);
});

Route::get('credit', function() {
    $data = [
        'title' => 'Credit',
        'body' => 'Selamat datang di Fathforce Starter Kits Pro. Salam Admin'
    ];
    return view('admin.credit', $data);
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
