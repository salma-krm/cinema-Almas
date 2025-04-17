<?php

namespace App\Providers;

use app\Repositories\Interfaces\ISalle;
use App\Repositories\SalleRepository;
use App\Services\Interfaces\ISalleService;
use App\Services\SalleService;
use Illuminate\Support\ServiceProvider;

class SalleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ISalle::class, SalleRepository::class);
        $this->app->bind(ISalleService::class, SalleService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
