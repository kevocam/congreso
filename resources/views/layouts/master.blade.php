<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="./img/logo.png">

    <title>Congreso de Tanatologia</title>
    <!-- Simple bar CSS -->
{{--     <link rel="stylesheet" href="{{asset('front/')}}/css/simplebar.css">
 --}}    <!-- Fonts CSS -->
    
    <!-- Icons CSS --> 
   {{--  <link rel="stylesheet" href="{{asset('front/')}}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/daterangepicker.css"> --}}
    <!-- App CSS -->
    <link rel="stylesheet" href="./css/master/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="./css/master/app-light.css" id="lightTheme" >
    <link rel="stylesheet" href="./css/master.css" >

    <link rel="stylesheet" href="./css/app.css">

    

    @yield('css')
    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>




    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.x/dist/alpine.min.js" defer></script>

{{--     <script src="https://js.pusher.com/7.0/pusher.min.js" defer></script>
 --}}

</head>

    <body class="vertical light  ">
        <div class="wrapper">
{{--             @livewire('navigation-menu')
 --}}
        <nav class="topnav navbar navbar-light">
            <button type="button" id="btn-toggle" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <img src="https://img.icons8.com/office/16/000000/menu--v1.png"/>       
            </button>
            <div class="text-blue-400 flex item-center">
                V Congreso Internacional de logoterapia y tanatología 2021   
            </div>
            <x-jet-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                     {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
        </nav>
        <aside class="  sidebar-left border-right   shadow-lg" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex ">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/dashboard">
                        <img width="120" class="mx-auto" height="60" src="./img/icon_congreso.png">
                    </a>
                </div>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span class="text-xl font-bold text-blue-900 flex justify-center items-center" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1E3A8A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                          </svg>
                        Conferencistas</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/conferencista"><span class="ml-1 item-text"></span>
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text text-blue-700 hover:text-blue-400">Ver conferencistas</span>
                        </a>
                    </li>
                </ul>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/crearconferencista"><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                           <span class="ml-3 item-text text-blue-700 hover:text-blue-400">Agregar conferencista</span>
                        </a>
                    </li>
                </ul>
               

                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span class="text-blue-900 font-bold text-xl flex justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-friends" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1E3A8A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="7" cy="5" r="2" />
                            <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />
                            <circle cx="17" cy="5" r="2" />
                            <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" />
                          </svg>
                        Asistentes</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/asistentes"><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text text-blue-700 hover:text-blue-400">Ver Avistentes</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/crearasistentes"><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text text-blue-700 hover:text-blue-400">Agregar Asistente</span>
                        </a>
                    </li>
                </ul>
                </p>
            </nav>
        </aside>


{{--         @include('layouts.left-menu')
 --}}        <main role="main" class="main-content ">
            <h2>@yield("title")</h2>
        @yield('content')
        </main>
        @include('layouts.notifications')

{{-- <script src="{{asset('front/')}}/js/jquery.min.js"></script>
<script src="{{asset('front/')}}/js/popper.min.js"></script>
<script src="{{asset('front/')}}/js/moment.min.js"></script>
<script src="{{asset('front/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front/')}}/js/simplebar.min.js"></script>
<script src='{{asset('front/')}}/js/daterangepicker.js'></script>
<script src='{{asset('front/')}}/js/jquery.stickOnScroll.js'></script>
<script src="{{asset('front/')}}/js/tinycolor-min.js"></script>
<script src="{{asset('front/')}}/js/config.js"></script>
<script src='{{asset('front/')}}/js/jquery.dataTables.min.js'></script>
<script src='{{asset('front/')}}/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('#dataTable-1').DataTable(
        {
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
</script>
<script src='{{asset('front/')}}/js/dataTables.bootstrap4.min.js'></script>
<script src="{{asset('front/')}}/js/apps.js"></script> --}}
<script src="./js/master.js"></script>

{{-- PUSHER --}}
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  


@livewireScripts
</body>

</html>

