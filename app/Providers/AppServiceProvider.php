<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Interfaces\CourseServiceInterface;
use App\Services\CourseService;

use App\Repositories\Interfaces\CourseInterface;
use App\Repositories\Eloquent\CourseRepository;

use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;
//Step
use App\Services\Interfaces\StepServiceInterface;
use App\Services\StepService;

use App\Repositories\Interfaces\StepInterface;
use App\Repositories\Eloquent\StepRepository;

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
        
     
        //StepInterface - StepRepository
        $this->app->singleton(StepInterface::class, StepRepository::class);
        /* Binding  Service*/
        $this->app->singleton(StepServiceInterface::class, StepService::class);
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
