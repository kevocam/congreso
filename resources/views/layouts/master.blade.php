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

    <link rel="stylesheet" href="./css/app.css">
    

    @yield('css')
    @livewireStyles
</head>

    <body class="vertical light  ">
        <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" id="btn-toggle" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <img src="https://img.icons8.com/office/16/000000/menu--v1.png"/>        </button>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" >
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                <img src="" alt="..." class="avatar-img rounded-circle">
                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Insignia</a>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
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
                    <span>Conferencistas</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/conferencista"><span class="ml-1 item-text"></span>
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Ver conferencistas</span>
                        </a>
                    </li>
                </ul>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/crearconferencista"><span class="ml-1 item-text">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Agregar conferencista</span>
                        </a>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Panelista</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/panelista"><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Ver panelistas</span>
                        </a>
                    </li>
                </ul>
                </p>

                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/crearpanelista"><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Agregar Panelistas</span>
                        </a>
                    </li>
                </ul>

                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Asistentes</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href=""><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Ver Avistentes</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href=""><span class="ml-1 item-text">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Agregar Asistente</span>
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
@livewireScripts
</body>

</html>

