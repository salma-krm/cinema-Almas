<?php
use App\Http\Controllers\ActeurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth', 'admin'])->group(function () {

    // Film Routes
    Route::post('/avis/update/{id}', [AvisController::class, 'update']);
    Route::get('/avis/delete/{id}', [AvisController::class, 'delete']);
    Route::get('/filmcreate', [FilmController::class, 'getActeurGenre'])->name('film.create');
    Route::post('/create/film', [FilmController::class, 'create']);
    Route::post('/film/update', [FilmController::class, 'update'])->name('update.film');
    Route::post('/film/edit/{id}', [FilmController::class, 'edit'])->name('edit.film');
    Route::get('/film/delete/{id}', [FilmController::class, 'delete'])->name('film.delete');

    Route::get('/salle', [SalleController::class, 'index']);
    Route::post('/updatedSalle', [SalleController::class, 'update']);
    Route::post('/update/{id}/salle', [SalleController::class, 'getById']);
    Route::delete('/delete/{id}/salle', [SalleController::class, 'delete'])->name('salle.delete');
    Route::post('/Sallecreate', [SalleController::class, 'create'])->name('Salle.create');


    Route::get('Admin/genre', [GenreController::class, 'getAll']);
    Route::post('/genrecreate', [GenreController::class, 'create'])->name('genre.create');
    Route::post('/update/{id}/genre', [GenreController::class, 'getById']);
    Route::post('/updategenre', [GenreController::class, 'update']);
    Route::delete('/delete/{id}/genre', [GenreController::class, 'delete'])->name('genre.delete');

    Route::get('/acteur', [ActeurController::class, 'getAll']);
    Route::post('/acteurcreate', [ActeurController::class, 'create'])->name('acteur.create');
    Route::post('/update/{id}/acteur', [ActeurController::class, 'getById']);
    Route::post('/updateacteur', [ActeurController::class, 'update']);
    Route::delete('/delete/{id}/actor', [ActeurController::class, 'delete'])->name('actor.delete');


    Route::get('/role', [RoleController::class, 'getAll']);
    Route::post('/rolecreate', [RoleController::class, 'create'])->name('role.create');
    Route::post('/update/{id}/role', [RoleController::class, 'getById']);
    Route::post('/updaterole', [RoleController::class, 'update']);
    Route::delete('/delete/{id}/role', [RoleController::class, 'delete'])->name('role.delete');

// Auth Routes
Route::post('/createuser', [AuthController::class, 'register']);
Route::post('/userlogin', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// user info
Route::post('/update/user', [UserController::class, 'update'])->name('update.user');
Route::get('/dashbord', [UserController::class, 'getUser'])->name('dashbord');
Route::get('/users', [UserController::class, 'getAll'])->name('dashbord.users');
Route::post('/user/updaterole/{id}', [UserController::class, 'updateRole'])->name('user.updateRole');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
// seances 
Route::get('/seance', [SeanceController::class, 'getFilmSalle'])->name('seance');
Route::post('/create/seance', [SeanceController::class, 'create'])->name('seance.create');
Route::get('/seance/dashbord', [SeanceController::class, 'getAll'])->name('seance.dashbord');
Route::post('/update/{id}/seance', [SeanceController::class, 'getSalle'])->name('seance.edit');
Route::delete('/delete/{id}/seance', [SeanceController::class, 'delete'])->name('seance.delete');
Route::post('/update/seance', [SeanceController::class, 'update'])->name('seance.update');
Route::get('/bookTicket/{id}', [SeanceController::class, 'bookTicket'])->name('bookTicket');
Route::get('/search', [FilmController::class, 'search'])->name('search');

//Avis
Route::post('/avis/create', [AvisController::class, 'create'])->name('avis.create');


    Route::post('/resrvation/create',[ReservationController::class ,'create'])->name('reservation.create');
    Route::get('/admin/reservation', [ReservationController::class,'getAll'])->name('reservayion.show');
    
    // Paiement Routes
    // Route::post('',[PaiementController::class ,'session'])->name('session');
    Route::post('/session', 'App\Http\Controllers\PaiementController@session')->name('checkout')->auth();
    Route::get('/success', 'App\Http\Controllers\PaiementController@success')->name('success')->auth();
    Route::get('/Panier/{id}', [PaiementController::class, 'AjouterPanier'])->name('Panier.ajouter');
    Route::get('/show/panier', [PaiementController::class, 'getPanier'])->name('Panier');
    Route::get('/delete/{id}/panier', [PaiementController::class, 'deletePanier'])->name('delete.panier');

// });

Route::get('/', [FilmController::class, 'getAll']);
Route::get('/filmdetail/{id}', [FilmController::class, 'getDetailFilm'])->name('film.show');
Route::get('/search', [FilmController::class, 'search'])->name('search');
Route::post('/avis/create', [AvisController::class, 'create'])->name('avis.create');
Route::get('/register', function () { return view('register'); });
Route::get('/login', function () { return view('login'); });
Route::get('/paiement', function () { return view('paiement'); });
Route::get('/detail', function () { return view('detailsfilm'); });
Route::get('/dashbord', [UserController::class, 'getUser'])->name('dashbord');
Route::post('/update/user', [UserController::class, 'update'])->name('update.user');

Route::post('/createuser', [AuthController::class, 'register']);
Route::post('/userlogin', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
