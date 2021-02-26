@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/pabellon2-xl.css">
@endsection
@section('content')

    @unless (Auth::check())
        Esta seccion es solo para personal autorizado
    @endunless
    <div class="contenedor">
        <div class="contenedor__main">
            <div class="salaStand">
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>
                        <p></p>
                    </a>
                </div>
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>
                        <p></p>
                    </a>
                </div>
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>
                        <p></p>
                    </a>
                </div>
                
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>
                        <p></p>
                    </a>
                </div>
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>
                        <p></p>
                    </a>
                </div>
                
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>                        <p></p>
                    </a>
                </div>
                
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>                        <p></p>
                    </a>
                </div>
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>                        <p></p>
                    </a>
                </div>
                <div class="salaStand__item">
                    <a href="">
                        <img src="https://img.icons8.com/officel/80/000000/online-store.png"/>                        <p></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="contenedor__footer">
            <div class="contenedor__footer--menu">
                <x-menu>
               
                </x-menu>
            </div>
            <div class="contenedor__footer--chat">
                chat
            </div>
            

        </div>
    </div>

    
@endsection
{{-- 
<x-congreso-layout>
    <main>
                {{ $slot }}
    </main>
</x-congreso-layout> --}}
@section('js')

<script src="./js/pabellon.js"></script>
@endsection