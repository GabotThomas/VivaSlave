<?php

use App\Http\Controllers\UserDashBoardController;
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
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
/*
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('admin_dashboard');
});*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserDashBoardController::class, 'index'])->name('user_dashboard');
});

require __DIR__ . '/auth.php';
