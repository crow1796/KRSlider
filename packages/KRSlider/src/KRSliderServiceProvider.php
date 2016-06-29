<?php

namespace KRSlider;

use Illuminate\Support\ServiceProvider;

class KRSliderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'krslider');
        $this->publishes([
              __DIR__ . '/views' => base_path('resources/views/krslider'),
              __DIR__ . '/database/migrations' => base_path('database/migrations'),
          ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/routes.php';
        $this->app->make('KRSlider\KRSliderController');
    }
}
