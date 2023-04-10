<?php

namespace App\Providers;

//use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function(User $user) {
            return $user->divisi_id === 1;
        });

        Gate::define('konsultan', function(User $user) {
            return $user->divisi_id !== 1;
        });
    }
}
