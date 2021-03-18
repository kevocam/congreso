@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dau.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @unless (Auth::check())
        Sitio restringido, solo usuarios registrados.
    @endunless
    <div class="contenedor">
        
{{--         @livewire('detail-live')
 --}}
        <div class="contenedor__footer">
            <div class="contenedor__footer--menu">
                    <div class="contenedor__footer--menu--head">
                        <h3>Síguenos en:</h3>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>
                                      Facebook
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="https://img.icons8.com/fluent/48/000000/youtube-play.png"/>
                                    Youtube
                                </a>
                                
                            </li>
                            <li>
                                <a href="">
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/>
                                    Instagram
                                </a>                            
                            </li>
                            <li>
                                <a href="">
                                    <img src="https://img.icons8.com/doodle/48/000000/tiktok--v1.png"/>
                                    TikTok
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="contenedor__footer--menu--footer">

                    </div>
            </div>
            <div class="contenedor__footer--chat">
                <div class="contenedor__footer--chat--cartel">
                    Dau Escuela de Vida, es un Centro de Formación Humano Existencial con sede en Lima Perú.
                    <a href="#">Ver más</a>
                </div>
                <div class="contenedor__footer--chat--banner">
                    <img src="./img/dauGroup1.png" alt="">
                    <img src="./img/dauGroup2.png" alt="">
                    <img src="./img/dauGroup3.png" alt="">
                    <img src="./img/dauGroup4.png" alt="">                   
                    
                </div>
            </div>
            

        </div>
    </div>

    
@endsection

<script src="./js/pabellon.js"></script>