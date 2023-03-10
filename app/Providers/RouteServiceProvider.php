<?php

namespace CHT\Providers;

use CHT\Course;
use CHT\Image;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'CHT\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layout.app', 'errors::404'], function ($view){
            $courses = Course::where('init_date','>=', date('Y-m-d'))->orderBy('init_date', 'ASC')->take(3)->get();
            $images = Image::all();
            $view->with('courses', $courses)->with('images', $images);
        });

        view()->composer(['layout.app', 'errors::403'], function ($view){
            $courses = Course::where('init_date','>=', date('Y-m-d'))->orderBy('init_date', 'ASC')->take(3)->get();
            $images = Image::all();
            $view->with('courses', $courses)->with('images', $images);
        });

        view()->composer(['layout.app', 'errors::419'], function ($view){
            $courses = Course::where('init_date','>=', date('Y-m-d'))->orderBy('init_date', 'ASC')->take(3)->get();
            $images = Image::all();
            $view->with('courses', $courses)->with('images', $images);
        });

        parent::boot();

    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
