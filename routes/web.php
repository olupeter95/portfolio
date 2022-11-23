<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminContactController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SkillController;
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

Route::prefix('/admin/category')->group(function () {
    Route::get('all', [CategoryController::class, 'viewCategory'])->name('category.view');
    Route::post('add', [CategoryController::class, 'storeCategory'])->name('category.store');
    Route::get('edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::post('update', [CategoryController::class, 'updateCategory'])->name('category.update');
    Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
});

Route::prefix('/admin/contact')->group(function () {
    Route::get('all', [AdminContactController::class, 'viewContact'])->name('contact.view');
    Route::get('delete/{id}', [AdminContactController::class, 'deleteContact'])->name('contact.delete');
});

Route::prefix('/admin/skill')->group(function () {
    Route::get('all', [SkillController::class, 'viewSkill'])->name('skill.view');
    Route::get('edit/{id}', [SkillController::class, 'editSkill'])->name('skill.edit');
    Route::post('update', [SkillController::class, 'updateSkill'])->name('skill.update');
    Route::post('store', [SkillController::class, 'storeSkill'])->name('skill.store');
    Route::get('delete/{id}', [SkillController::class, 'deleteSkill'])->name('skill.delete');
});

Route::post('/guest/contact', [ContactController::class, 'storeContact'])->name('contact.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
