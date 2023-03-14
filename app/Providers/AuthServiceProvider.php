<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public static $permission = [
        'dashboard' => ['admin', 'user'],
        'profile' => ['admin', 'user'],
        'change-password' => ['admin', 'user'],
    ];

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
        //
        // Gate::define('dashboard', function (User $user) {
        //     if ($user->role === 'superadmin' || $user->role === 'admin') {
        //         return true;
        //     }
        // });

        //SuperAdmin Bisa Akses Semua
        Gate::before(function (User $user) {
            if ($user->role === 'superadmin') {
                return true;
            }
        });

        //Permission setiap role
        foreach (self::$permission as $action => $roles) {
            Gate::define($action, function (User $user) use ($roles) {
                if (in_array($user->role, $roles)) {
                    return true;
                }
            });
        }
    }
}
