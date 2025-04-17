<?php

namespace App\Providers;

use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\IUser;
use App\Repositories\SalleRepository;
use App\Repositories\UserRepository;
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
     
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
       
    }
}
