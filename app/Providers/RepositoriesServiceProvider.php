<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Repositories\Interfaces\RoleInterface',
            'App\Repositories\Repositories\RoleRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\UserInterface',
            'App\Repositories\Repositories\UserRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\AssignmentPersonInterface',
            'App\Repositories\Repositories\AssignmentPersonRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\TaxSettingsInterface',
            'App\Repositories\Repositories\TaxSettingsRepository'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
