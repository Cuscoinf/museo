<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Museo {{-- config('app.name', 'Investigador') --}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Museo
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>Panel Investigadores</li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        @if(Auth::guard('investigadores')->check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('investigadores')->user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logoutInvestigador') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logoutInvestigador') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="menulat">
                            <ul>
                                <li class="py-2"><i class="fa fa-chevron-circle-right"></i> <a href="solicitar-investigacion">Solicitar Investigacion</a></li>
                                <li class="py-2"><i class="fa fa-chevron-circle-right"></i> <a href="solicitar-deposito">Solicitar Deposito</a></li>
                                <li class="py-2"><i class="fa fa-chevron-circle-right"></i> <a href="caso-fortuito">Casos fortuitos</a></li>
                                <li class="py-2"><i class="fa fa-chevron-circle-right"></i> <a href="animales-decomisados">Animales decomisados</a></li>
                                <li class="py-2"><i class="fa fa-chevron-circle-right"></i> <a href="depositar-especimen">Depositar Especimen</a></li>
                                <li class="py-2"><i class="fa fa-chevron-circle-right"></i> <a href="notificaciones">Notificaciones <span class="badge badge-primary">3</span> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @yield('contenido')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
