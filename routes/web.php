<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

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

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
->name('admin.dashboard')
->middleware('auth');

Route::prefix('/admin/about')->group(function () {
    Route::get('all', [AboutController::class, 'viewAbout'])->name('about.view');
    Route::post('add', [AboutController::class, 'storeAbout'])->name('about.store');
    Route::get('edit/{id}', [AboutController::class, 'editAbout'])->name('about.edit');
    Route::post('update', [AboutController::class, 'updateAbout'])->name('about.update');
    Route::get('delete/{id}', [AboutController::class, 'deleteAbout'])->name('about.delete');
});

Route::post('/guest/contact', [ContactController::class, 'storeContact'])->name('contact.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
