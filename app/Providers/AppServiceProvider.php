<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Interfaces\CourseServiceInterface;
use App\Services\CourseService;

use App\Repositories\Interfaces\CourseInterface;
use App\Repositories\Eloquent\CourseRepository;

use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* Binding  Repository*/
        //RepositoryInterface - EloquentRepository
        $this->app->singleton(RepositoryInterface::class, EloquentRepository::class);
        //CourseInterface - CourseRepository
        $this->app->singleton(CourseInterface::class, CourseRepository::class);

        /* Binding  Service*/
        $this->app->singleton(CourseServiceInterface::class, CourseService::class);
        
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
