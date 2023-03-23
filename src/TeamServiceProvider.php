<?php

namespace OutMart\Team;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use OutMart\Team\Middleware\TeamMiddleware;

class TeamServiceProvider extends ServiceProvider
{
    public function boot(Router $router)
    {
        $router->aliasMiddleware('oTeam', TeamMiddleware::class);

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        }
    }
}
