<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        $this->registerPolicies();

        Gate::define('diretor_geral', function (User $user) {
            return $user->nivel === 1;
        });

        Gate::define('diretor', function (User $user) {
            return $user->nivel === 2;
        });

        Gate::define('gerente', function (User $user) {
            return $user->nivel === 3;
        });

        Gate::define('vendedor', function (User $user) {
            return $user->nivel === 4;
        });
    }
}
