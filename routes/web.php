<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agama64Controller;
use App\Http\Controllers\User64Controller;
use App\Http\Controllers\Detail_data64Controller;
use Illuminate\Support\Facades\Auth;

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

    if (Auth::check()) {
        $role = Auth::user()->role;
        $foto = Auth::user()->foto;
    } else {
        $role = null;
        $foto = null;
    }

    return view('dashboard', [
        'role'=>$role,
        'foto'=>$foto,
    ]);
})->name('index64');

Route::middleware(['auth', 'hakakses:role'])->group(function () {

    // User
    Route::get('/users64', [User64Controller::class, 'users64'])->name('users64');
    Route::get('/detailUser64/{id}', [User64Controller::class, 'detailUser64'])->name('detailUser64');
    Route::get('/profile64', [User64Controller::class, 'profile64'])->name('profile64');


    Route::get('/updatePassword64', [User64Controller::class, 'updatePassword64'])->name('updatePassword64');
    Route::post('/updatePasswordProses64/{id}', [User64Controller::class, 'updatePasswordProses64'])->name('updatePasswordProses64');



    Route::get('/logout64', [User64Controller::class, 'logout64'])->name('logout64');

    // Detail data
    Route::get('/detailData64', [Detail_data64Controller::class, 'detailData64'])->name('detailData64');

    Route::get('/createData64', [Detail_data64Controller::class, 'createData64'])->name('createData64');
    Route::post('/createDataProses64', [Detail_data64Controller::class, 'createDataProses64'])->name('createDataProses64');

    Route::get('/updateData64', [Detail_data64Controller::class, 'updateData64'])->name('updateData64');
    Route::post('/updateDataProses64', [Detail_data64Controller::class, 'updateDataProses64'])->name('updateDataProses64');
});

Route::middleware(['auth', 'hakadmin:role'])->group(function () {
    // agama
    Route::get('/agama64', [Agama64Controller::class, 'agama64'])->name('agama64');

    Route::get('/createAgama64', [Agama64Controller::class, 'createAgama64'])->name('createAgama64');
    Route::post('/createAgama64Proses', [Agama64Controller::class, 'createAgama64Proses'])->name('createAgama64Proses');

    Route::get('/deleteAgama64Proses/{id}', [Agama64Controller::class, 'deleteAgama64Proses'])->name('deleteAgama64Proses');

    Route::get('/updateAgama64/{id}', [Agama64Controller::class, 'updateAgama64'])->name('updateAgama64');
    Route::post('/updateAgama64Proses/{id}', [Agama64Controller::class, 'updateAgama64Proses'])->name('updateAgama64Proses');

    // user
    Route::get('/deleteUser64/{id}', [User64Controller::class, 'deleteUser64'])->name('deleteUser64');
    Route::get('/approveUser64/{id}', [User64Controller::class, 'approveUser64'])->name('approveUser64');
    Route::get('/detailDataUser64/{id}', [Detail_data64Controller::class, 'detailDataUser64'])->name('detailDataUser64');
});

Route::get('/login64', [User64Controller::class, 'login64'])->name('login64');
Route::post('/loginProses64', [User64Controller::class, 'loginProses64'])->name('loginProses64');

Route::get('/register64', [User64Controller::class, 'register64'])->name('register64');
Route::post('/registerProses64', [User64Controller::class, 'registerProses64'])->name('registerProses64');

