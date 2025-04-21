<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Repositories\ActeurRepository;
use App\Repositories\FilmRepository;
use App\Repositories\GenreRepository;
use App\Repositories\SalleRepository;
use App\Repositories\UserRepository;

use App\Repositories\Interfaces\IActeur;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\IGenre;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\IUser;
use App\Repositories\RoleRepository;
use App\Services\ActeurService;
use App\Services\AuthService;
use App\Services\FilmService;
use App\Services\GenreService;
use App\Services\SalleService;
use App\Services\UserService;

use App\Services\Interfaces\IActeurService;
use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IFilmService;
use App\Services\Interfaces\IGenreService;
use App\Services\Interfaces\IRoleService;
use App\Services\Interfaces\ISalleService;
use App\Services\Interfaces\IUserService;
use App\Services\RoleService;

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

    }

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
