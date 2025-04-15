<?php

namespace App\Providers;

use app\Repositories\Interfaces\ISalle;
use app\Repositories\Interfaces\IUser;
use App\Repositories\SalleRepository;
use App\Repositories\UserRepository;
use App\Services\Interfaces\ISalleService;
use App\Services\Interfaces\IUserService;
use App\Services\UserService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IUser::class, UserRepository::class);
        $this->app->bind(IUserService::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

    }
}
