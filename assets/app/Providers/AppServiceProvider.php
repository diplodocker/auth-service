<?php
declare(strict_types = 1);

namespace App\Providers;

use App\User;
use Diplodocker\Services\Contracts\AuthorizationInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            AuthorizationInterface::class,
            User::class
        );
    }
}
