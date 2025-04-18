<?php
namespace App\Providers;
use App\Repositories\ActeurRepository;
use App\Repositories\GenreRepository;
use App\Repositories\Interfaces\IActeur;
use App\Repositories\Interfaces\IGenre;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\IUser;
use App\Repositories\SalleRepository;
use App\Repositories\UserRepository;
use App\Services\ActeurService;
use App\Services\GenreService;
use App\Services\Interfaces\IActeurService;
use App\Services\Interfaces\IGenreService;
use app\Services\Interfaces\ISalleService;
use App\Services\Interfaces\IUserService;
use App\Services\SalleService;
use App\Services\UserService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
     
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
       
    }
}
