<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Repositories\ActeurRepository;
use App\Repositories\AvisRepositiry;
use App\Repositories\FilmRepository;
use App\Repositories\GenreRepository;
use App\Repositories\SalleRepository;
use App\Repositories\UserRepository;

use App\Repositories\Interfaces\IActeur;
use App\Repositories\Interfaces\IAvis;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\IGenre;
use App\Repositories\Interfaces\IPaiement;
use App\Repositories\Interfaces\IReservation;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\ISeance;
use App\Repositories\Interfaces\IUser;
use app\Repositories\PaiementRepository;
use App\Repositories\ReservationRepository;
use App\Repositories\RoleRepository;
use App\Repositories\SeanceRepository;
use App\Services\ActeurService;
use App\Services\AuthService;
use App\Services\AvisService;
use App\Services\FilmService;
use App\Services\GenreService;
use App\Services\SalleService;
use App\Services\UserService;

use App\Services\Interfaces\IActeurService;
use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IAvisService;
use App\Services\Interfaces\IFilmService;
use App\Services\Interfaces\IGenreService;
use App\Services\Interfaces\IPaiementService;
use App\Services\Interfaces\IReservationService;
use App\Services\Interfaces\IRoleService;
use App\Services\Interfaces\ISalleService;
use App\Services\Interfaces\ISeanceService;
use App\Services\Interfaces\IUserService;
use App\Services\PaiementService;
use App\Services\ReservationService;
use App\Services\RoleService;
use App\Services\SeanceService as ServicesSeanceService;
use SeanceService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IUser::class, UserRepository::class);
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(ISalle::class, SalleRepository::class);
        $this->app->bind(ISalleService::class, SalleService::class);
        $this->app->bind(IGenre::class, GenreRepository::class);
        $this->app->bind(IGenreService::class, GenreService::class);
        $this->app->bind(IActeur::class, ActeurRepository::class);
        $this->app->bind(IActeurService::class, ActeurService::class);
        $this->app->bind(IRole::class, RoleRepository::class);
        $this->app->bind(IRoleService::class, RoleService::class);
        $this->app->bind(IAuthService::class, AuthService::class);
        $this->app->bind(IFilm::class, FilmRepository::class);
        $this->app->bind(IFilmService::class, FilmService::class);
        $this->app->bind(ISeance::class, SeanceRepository::class);
        $this->app->bind(ISeanceService::class, ServicesSeanceService::class);
        $this->app->bind(IAvis::class,AvisRepositiry::class);
        $this->app->bind(IAvisService::class,AvisService::class);
        $this->app->bind(IReservation::class, ReservationRepository::class);
        $this->app->bind(IReservationService::class ,ReservationService::class);
        $this->app->bind(IPaiement::class,PaiementRepository::class);
        $this->app->bind(IPaiementService::class,PaiementService::class);
       

    }

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
