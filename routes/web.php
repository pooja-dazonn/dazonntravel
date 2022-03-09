<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\packageController;


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
//     return view('userpanel/index');
// });

Route::get('/', [packageController::class, 'index']);
Route::get('create', [packageController::class, 'create']);
Route::post('create', [packageController::class, 'savedata'])->name('create');
Route::get('datetimepicker', [packageController::class, 'datetimepicker']);
// Route::get('abc', [packageController::class, 'abc']);
Route::get('blog', [packageController::class, 'blog']);

Route::get('blog2/{id}', [packageController::class, 'blog2']);
Route::get('createblog', [packageController::class, 'createblog']);
Route::post('createblog', [packageController::class, 'blogdata'])->name('createblog');
Route::get('faq', [packageController::class, 'faq']);
Route::get('contactus', [packageController::class, 'contactus']);
Route::post('filter', [packageController::class, 'filter'])->name('filter');
Route::get('abouttus', [packageController::class, 'aboutus']);
