<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\UrlGenerator;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if (env('REDIRECT_HTTPS')) 
        {
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url, Dispatcher $events)
    {
        //
        Schema::defaultStringLength(191);
        //Metodo para la redireccion de las URL de laravel en el hosting
        if (env('REDIRECT_HTTPS')) 
        {
            $url->formatScheme('https://');
        }
        // Menu con las diferentes opciones
        $events->listen(BuildingMenu::class, function (BuildingMenu $event)
        {
            $event->menu->add([
                'text' => 'ADMINISTRACIÓN',
                'icon' => 'fas fa-key',
                'can' => 'administration-menu',
                'submenu' => array([
                    'text' => 'Roles',
                    'icon' => 'fas fa-lock',
                    'can' => 'rol-admin',
                    'url'  => 'roles/',
                ], [
                    'text' => 'Permisos',
                    'icon' => 'fas fa-lock',
                    'can' => 'permission-admin',
                    'url'  => 'permissions/',
                ],[
                    'text' => 'Usuarios',
                    'icon' => 'fas fa-users',
                    'can' => 'user-admin',
                    'url'  => 'users/',
                ]),
            ]);
        });
    }
}
