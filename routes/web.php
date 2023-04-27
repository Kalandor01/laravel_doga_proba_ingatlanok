<?php

use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\KategoriaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/api/kategoriak', [KategoriaController::class, "index"]);
Route::get('/api/kategoriak/{id}', [KategoriaController::class, "show"]);

Route::get('/api/ingatlanok', [IngatlanController::class, "index"]);
Route::get('/api/ingatlanok/full', [IngatlanController::class, "indexFull"]);
Route::get('/api/ingatlanok/{id}', [IngatlanController::class, "show"]);
Route::post('/api/ingatlanok', [IngatlanController::class, "store"]);
Route::delete('/api/ingatlanok/{id}', [IngatlanController::class, "destroy"]);


Route::get('/ingatlanok', [IngatlanController::class, "listView"]);
Route::get('/ingatlanok/new', [IngatlanController::class, "newView"]);


require __DIR__.'/auth.php';
