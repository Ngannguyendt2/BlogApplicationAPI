<?php

namespace App\Providers;

use App\Http\Repositories\BlogRepository;
use App\Http\Repositories\IMPL\BlogRepositoryImpl;
use App\Http\Services\BlogService;
use App\Http\Services\IMPL\BlogServiceIMPL;
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
        //
        $this->app->singleton(

            BlogRepository::class,
            BlogRepositoryImpl::class
        );
        $this->app->singleton(

            BlogService::class,
            BlogServiceIMPL::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
