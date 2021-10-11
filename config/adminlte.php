<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => '',
    'title_prefix' => '',
    'title_postfix' => '| Museo',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => 'MUSEO',
    'logo_img' => 'vendor/adminlte/dist/img/logo-unsaac.PNG',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Museo',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-info elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-dark bg-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => '/',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
        // [
        //     'text' => 'search',
        //     'search' => true,
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'blog',
        //     'url'  => 'admin/blog',
        //     'can'  => 'manage-blog',
        // ],
        // [
        //     'key' =>'escritorio',
        //     'text' => 'Escritorio',
        //     'route'  => 'home',

        // ],
        ['header' => 'Solicitudes', 'can'  => ['user-admin']],
        [
            'text' => 'Gestion de solicitudes',
            'route'  => 'investigador.index',
            'icon' => 'fas fa-fw fa-user',
            'can'  => ['user-admin'],
            'submenu' => [
                [
                    'text' => 'Solicitudes de Investigacion',
                    'route'  => 'investigador.solicitud.investigacion',
                    'icon' => 'far fa-edit',
                    'can'  => ['user-admin','carta-admin'],
                ],
                [
                    'text' => 'Solicitudes de Deposito',
                    'route'  => 'investigador.solicitud.deposito',
                    'icon' => 'fas fa-envelope-open-text',
                    'can'  => ['user-admin'],
                ],
                [
                    'text' => 'Salida a Campo',
                    'route'  => 'carta.index',
                    'icon' => 'fas fa-fw fa-user',
                    'can'  => ['user-admin','carta-admin'],
                ],
                [
                    'text' => 'Organizaciones',
                    'url'  => '#',
                    'icon' => 'fas fa-fw fa-user',
                    'can'  => ['user-admin'],
                ],
            ],
        ],
        
        ['header' => 'Especimenes',  'can'  => ['user-admin','investigador-admin']],
        [
            'text' => 'Registro de especimenes',
            'route'  => 'especimen.index',
            'icon' => 'fab fa-stack-overflow',
            'can'  => ['user-admin','investigador-h'],
            "submenu" => [
                [
                    'text' => 'Herpetología',
                    'route'  => 'especimen.index',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','investigador-h'],
                ],
                [
                    'text' => 'Ornitologia',
                    'route'  => 'especimen.ornitologia',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','investigador-o'],
                ],
                [
                    'text' => 'Maztozoología',
                    'route'  => 'especimen.maztozoologia',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','investigador-m'],
                ],
                [
                    'text' => 'Animales decomisados',
                    'route'  => 'especimen.decomisados',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','investigador-admin'],
                ],
            ],
        ],
        [
            'text' => 'Revisión de especimen',
            'url'  => 'lista-especimen/maztozoologia',
            'icon' => 'fas fa-clipboard-list',
            'can'  => ['user-admin','user-admin'],
            "submenu" => [
                [
                    'text' => 'Lista Ornitologia',
                    'url'  => 'lista-especimen/ornitologia',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','user-admin'],
                ],
                [
                    'text' => 'Lista Herpetologia',
                    'url'  => 'lista-especimen/herpetologia',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','user-admin'],
                ],
                [
                    'text' => 'Animales decomisados',
                    'url'  => 'lista-especimen/decomisados',
                    'icon' => 'fas fa-fw fa-chevron-circle-right',
                    'can'  => ['user-admin','user-admin'],
                ],
            ],
        ],
        
        ['header' => 'REPORTES'],
        [
            'text' => 'Reportes Museo',
            'route' => 'reporteSerfor',
            'icon' => 'fas fa-fw fa-chart-pie',
            "submenu" => [
                [
                    'text' => 'SERFOR Anual',
                    'route' => 'reporteSerfor',
                    'icon' => 'fas fa-fw fa-chevron-circle-right'
                ],
                [
                    'text' => 'Casos fortuitos',
                    'route' => 'reporteFortuitos',
                    'icon' => 'fas fa-fw fa-chevron-circle-right'
                ],
                [
                    'text' => 'Muestro Investigacion',
                    'route' => 'reporteInvestigador',
                    'icon' => 'fas fa-fw fa-chevron-circle-right'
                ],
            ],
        ],
        ['header' => 'PREFERENCIAS'],
        [
            'text' => 'Roles de Usuario',
            'route'  => 'roles.index',
            'icon' => 'fas fa-fw fa-user',
            'can'  => ['user-admin','roles-admin'],

        ],
        [
            'text' => 'Áreas',
            'route'  => 'area.index',
            'icon' => 'fas fa-fw fa-user',
            'can'  => ['user-admin','areas-admin'],
        ],
        // [
        //     'text' => 'profile',
        //     'url'  => 'auth.register',
        //     'icon' => 'fas fa-fw fa-user',

        // ],
        [
            'text' => 'Nombres especies',
            'route' => 'nombreEspecimen',
            'icon' => 'fas fa-list',
            'can'  => ['user-admin','investigador-admin'],
        ],
        [
            'text' => 'Cerrar Session',
            'url'  => 'logout',
            'icon' => 'fas fa-fw fa-sign-out',
            'topnav_right' =>true,


        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Datepicker' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/moment.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => false,
];
