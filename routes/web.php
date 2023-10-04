<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Contact\ContactIndex;
use App\Http\Livewire\UserIndex;
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

Route::get('/toturial', function () {
    return view('toturial');
});

Route::get('/users', function () {
    return view('users.index');
})->name('users');
// Route::get('/users', UserIndex::class);
Route::get('/contacts',ContactIndex::class);
Route::get('/user/{id}',[UserController::class,'show'])->name('detail');
