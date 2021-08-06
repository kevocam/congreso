<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CONGRESO INTERNACIONAL DE LOGOTERAPIA Y TANATOLOGIA </title>
        <link rel="icon" href="./img/logo.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @yield('style')
        <link rel="stylesheet" href="./css/app.css">
        <link rel="stylesheet" href="./css/MenuMainCard.css">
        <link rel="stylesheet" href="./css/welcome-tablet.css" media="(min-width:930px)">
        <link rel="stylesheet" href="./css/welcome.css">
        <link rel="stylesheet" href="./css/chat.css">
        <link rel="stylesheet" href="./css/information.css">
        

        {{-- <link rel="stylesheet" href="./css/details.css"> --}}
        <!-- Styles -->
        
{{--         <link rel="stylesheet" href="./css/styleSass.css">
 --}}
    <script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide">

    </script>
    <script src="./js/welcome.js" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="./js/pabellon.js" defer></script>

    @livewireStyles

    </head>
    <body>
        <header class=" menuMain">

            <nav class="  nav flex flex-wrap items-center justify-between px-4">
              
                <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest">
                    <a href="/">
                    <img src="./img/icon_congreso.png" alt="">
                    </a>
                    <span class="font-semibold text-xl tracking-tight"></span>
                </div>

                <input class="menu-btn hidden" type="checkbox" id="menu-btn">
                <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
                    <span class="navicon bg-grey-darkest flex items-center relative"></span>
                </label>

                <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto">
                    @auth
                    <li class=" text-md:border-none sm:text-right">
                        <a  href="/lobby" class="menuLobby block md:inline-block px-4 py-3 no-underline text-grey-400 hover:text-grey-darker ">Lobby</a>
                    </li>
                    <li class="border-t md:border-none">
                        <a href="/pabellon" class="menuLobby block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker sm:text-right">Pabellon</a>
                    </li>                    
                    @hasanyrole('manager|super-admin')

                    <li class="border-t md:border-none">
                        <a href="/dashboard" class="menuLobby block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker sm:text-right">Dashboard</a>
                    </li>
                    @endhasanyrole
                    <li id="dropdownMain" class="flex border-t md:border-none">
                                             
                        <ul class="menuLobby">
                          <x-jet-dropdown  align="right" width="48">
                            <x-slot name="trigger">          
                              <div class="flex align-center justify-center">                                
                                {{ Auth::user()->name }}                               
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#096191" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <path d="M18 15l-6 -6l-6 6h12" transform="rotate(180 12 12)" />
                                </svg>
                              </div>                    
                          </x-slot>                            
                          
                            <x-slot name="content">
                              <div class="block px-4 py-2 text-base text-gray-400">
                                Tu cuenta
                            </div>
    
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                              <div class="block px-4 py-2 text-lg ">                                
                                {{ __('Profile') }}
                            </div>
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
                                  <div class="block px-4 py-2 text-lg ">                                
                                    {{ __('Logout') }}                                </div>
                                    
                                </x-jet-dropdown-link>
                            </form>
                            </x-slot>
                          </x-jet-dropdown>  
                        </ul>                   
                    </li>
                    @endauth
                    @guest
                        
                    <li class="border-t md:border-none">
                        <a href="/register" class="menuLobby block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker ">Registrarse</a>
                    </li>
                    
                    <li class="border-t md:border-none">
                        <a href="/login" class="menuLobby block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Iniciar Sesión</a>
                    </li>                                 
                    @endguest                    
                </ul>                
            </nav>
        </header>  
          
 
<main>
        @yield('content')
</main>
        
    
    @livewireScripts

    @yield('js')
    </body>
    <footer class="text-gray-600 body-font">
      
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
         
            <span class="ml-3 text-xl sm:justify-start">V Congreso Internacional de logoterapia y tanatología 2021
            </span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 Lima - Perú            <a href="https://twitteve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank"></a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center align-center sm:justify-start">
            <a href="https://www.facebook.com/search/top?q=dauperu" class="text-gray-500 scale-50	">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>            
            <a  href="https://www.instagram.com/dauescueladevida/?hl=es" class="ml-3 text-gray-500 scale-50	">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a href="https://www.youtube.com/channel/UCxe3zqTp2kwmFyiFIrRCQNw" class="ml-3 text-gray-500 scale-50	">
              <svg fill="none" stroke="currentColor" class="icon icon-tabler icon-tabler-brand-youtube w-5 h-5" stroke-width="2"  viewBox="0 0 24 24" stroke="#6B7280" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="3" y="5" width="18" height="14" rx="4" />
                <path d="M10 9l5 3l-5 3z" />
              </svg>
            </a>
          </span>
        </div>
      </footer>

</html>