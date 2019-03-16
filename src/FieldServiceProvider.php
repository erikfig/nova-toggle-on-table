<?php

namespace Erikfig\NovaToggleOnTable;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-toggle-on-table', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-toggle-on-table', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Route::domain(config('nova.domain', null))
            ->middleware(config('nova.middleware', []))
            ->prefix('/erikfig/toggle')
            ->group(__DIR__ . '/../routes/api.php');
    }
}
