<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];


    public function existeMenuInvestigador($menu, $user)
    {
        if ($user->rol == 'investigador') {
            $menu_users = $user->menuItems();

            foreach ($menu_users as $menus) {
                if ($menus->item == $menu) {
                    return true;
                }
            }
            return false;
        }
    }

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $this->registerPolicies();

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->addBefore('escritorio');
            $event->menu->addBefore('escritorio', [
                'text'        => 'User: ' . Auth::user()->name,
                'url'         => '#',
                'label'       => Auth::user()->rol,
                'label_color' => 'success',
                'icon' => 'fas fa-fw fa-user',
                'icon_color' => 'black',
                'classes' => 'ext-danger text-uppercase bg-yellow',
            ]);
        });

        Gate::define('user-admin', function ($user) {


            if ($user->rol == 'admin' || $user->rol == 'curador') {

                return true;
            }
            return false;
        });

        //FUNCIONES PARA MOSTRAR EL MENU SEGUN A SUS PERMISOS SI EL USUARIO ES DE TIPO INVESTIGADOR


        Gate::define('areas-admin', function ($user) {

            if ($user->rol == 'investigador') {
                $menu_users = $user->menuItems();

                foreach ($menu_users as $menu) {
                    if ($menu->item == 'area') {
                        return true;
                    }
                }
                return false;
            }
        });

        Gate::define('investigador-admin', function ($user) {

            return $this->existeMenuInvestigador('investigador', $user);
        });

        Gate::define('formacion-academica-admin', function ($user) {

            return $this->existeMenuInvestigador('formacion-academica', $user);
        });

        Gate::define('solicitudes-admin', function ($user) {

            return $this->existeMenuInvestigador('solicitudes', $user);
        });

        Gate::define('roles-admin', function ($user) {

            return $this->existeMenuInvestigador('roles', $user);
        });
    }
}
