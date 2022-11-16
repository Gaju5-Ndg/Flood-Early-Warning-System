<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StationController;
  


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

Route::get('page/', function () {
    return view('pages.index');
});
 Route::get('/main',function () {
    return view('login');
 });

/*Route::get('/users', [usersController::class,'index']);
Route::get('/add', [usersController::class,'create']);*/

Route::resource('users', userController::class);
Route::resource('users', userController::class);
Route::resource('Admins', AdminController::class);
Route::resource('Stations', StationController::class);
// Route::get('/users', function () {
//     return view('users.index');
// });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::post('add',[AdminController::class,'store']);
// Route::view('add','Admins');
// Route::post('create',[StationController::class,'insertintostation']);
// Route::view('create','Stations');
// Route::get('create',[AdminController::class,'show']);