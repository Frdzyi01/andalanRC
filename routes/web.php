<?php

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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('landingpage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('setting.projects');
Route::get('/projects/data', [App\Http\Controllers\ProjectController::class, 'getData'])->name('projects.data');
Route::post('/projects/save', [App\Http\Controllers\ProjectController::class, 'saveData'])->name('projects.save');
Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'getProject']);
Route::delete('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'deleteData'])->name('projects.delete');
Route::get('/projects/detail/{id}', [App\Http\Controllers\ProjectController::class, 'detailProject'])->name('projects.detail');

Route::get('/setting/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('setting.categories');
Route::get('/categories/data', [App\Http\Controllers\CategoryController::class, 'getData'])->name('categories.data');
Route::post('/categories/save', [App\Http\Controllers\CategoryController::class, 'saveData'])->name('categories.save');
Route::get('/categories/list', [App\Http\Controllers\CategoryController::class, 'listData'])->name('categories.list');
