<?php

use App\Http\Controllers\ActeurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;

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



Route::get('/detail', function () {
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


// Route::get('/dashbord', [UserController::class, 'getAll'])->name('dashboard');



Route::get('/Admin/dashbord', function () {
    return view('admindashbord.reservationdashbord');
});
// Route::get('/Admin/film', function () {
//     return view('admindashbord.film.filmdashbord');
// });
Route::get('/create/film', function () {
    return view('admindashbord.film.filmcreate');
});
Route::get('/Admin/salle', function () {
    return view('admindashbord.salledashbord');
});
Route::get('/create/salle', function () {
    return view('admindashbord.salleCreate');
});
Route::get('/create/genre', function () {
    return view('admindashbord.genre.genrecreate');
});

Route::get('/Admin/users', function () {
    return view('admindashbord.userdashbord');
});
Route::get('/logout', function () {
    return view('admindashbord.userdashbord');
});
Route::get('/acteurcreate', function () {
    return view('admindashbord.acteur.acteurcreate');
});

Route::get('/rolecreate', function () {
    return view('admindashbord.role.rolecreate');
});
Route::get('/', [FilmController::class, 'getAll']);

Route::get('/Admin/film', [FilmController::class, 'index']);
Route::post('/createuser', [AuthController::class, 'register']);
Route::post('/userlogin', [AuthController::class, 'login'])->name('login')
;

Route::get('/Admin/salle',[SalleController::class, 'index']);
Route::post('/updatedSalle',[SalleController::class ,'update']);
Route::post('/update/{id}/salle',[SalleController::class, 'getById']);
Route::delete('/delete/{id}/salle', [SalleController::class, 'delete'])->name('salle.delete');
Route::post('/Sallecreate', [SalleController::class, 'create'])->name('Salle.create');

Route::get('Admin/genre',[GenreController::class,'getAll' ]);
Route::post('/genrecreate', [GenreController::class, 'create'])->name('genre.create');
Route::post('/update/{id}/genre',[GenreController::class, 'getById']);
Route::post('/updategenre',[GenreController::class ,'update']);
Route::delete('/delete/{id}/genre', [GenreController::class, 'delete'])->name('genre.delete');


Route:: get('/acteur',[ActeurController::class,'getAll' ]);
Route::post('/acteurcreate', [ActeurController::class, 'create'])->name('acteur.create');
Route::post('/update/{id}/acteur',[ActeurController::class, 'getById']);
Route::post('/updateacteur',[ActeurController::class ,'update']);
Route::delete('/delete/{id}/actor', [ActeurController::class, 'delete'])->name('genre.delete');


Route:: get('/role',[RoleController::class,'getAll' ]);
Route::post('/rolecreate', [RoleController::class, 'create'])->name('role.create');
Route::post('/update/{id}/role',[RoleController::class, 'getById']);
Route::post('/updaterole',[RoleController::class ,'update']);
Route::delete('/delete/{id}/role', [RoleController::class, 'delete'])->name('role.delete');

Route::get('/film/craete', [FilmController::class, 'getActeurGenre'])->name('film.create');
Route::post('/create/film', [FilmController::class, 'create']);

