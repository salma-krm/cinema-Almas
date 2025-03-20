<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/detailsfilm', function () {
    return view('detailsfilm');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/paiement', function () {
    return view('paiement');
});
Route::get('/dashbord', function () {
    return view('dashbord');
});
Route::get('/Admin/dashbord', function () {
    return view('admindashbord.reservationdashbord');
});
Route::get('/Admin/film', function () {
    return view('admindashbord.filmdashbord');
});
Route::get('/Admin/salle', function () {
    return view('admindashbord.salledashbord');
});
Route::get('/Admin/users', function () {
    return view('admindashbord.userdashbord');
});


