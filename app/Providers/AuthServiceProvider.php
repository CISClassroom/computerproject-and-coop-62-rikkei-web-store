<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define users role */
        Gate::define('isAdmin', function ($user) {
            return $user->role_id == '1';
        });

        Gate::define('isManager', function ($user) {
            return $user->role_id == '2';
        });

        Gate::define('isMember', function ($user) {
            return $user->role_id == '3';
        });

        Gate::define('isUser', function ($user) {
            return $user->role_id == '4';
        });
    }
}
