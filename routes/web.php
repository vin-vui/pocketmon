<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Blogs;
use App\Http\Livewire\Parameters;
use App\Http\Livewire\Expenses;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('blog', Blogs::class)->name('blog');
Route::middleware(['auth:sanctum', 'verified'])->get('parameter', Parameters::class)->name('parameter');
Route::middleware(['auth:sanctum', 'verified'])->get('expense', Expenses::class)->name('expense');
