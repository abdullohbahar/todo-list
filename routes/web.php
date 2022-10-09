<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProjectController::class, 'index']);
Route::get('/get-project', [ProjectController::class, 'getProject'])->name('get-project');
Route::post('/store-project', [ProjectController::class, 'store'])->name('store-project');
Route::get('/task/{slug}', [TaskController::class, 'index'])->name('task');
