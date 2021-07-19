@extends('layouts.congreso')

@section('style')
<link rel="stylesheet" href="./css/lobby-sxl.css" > 
<link rel="stylesheet" href="./css/lobby-xl.css" media="(max-width:1024px)"> 
<link rel="stylesheet" href="./css/lobby-tablet.css" media="(max-width:930px)"> 
<link rel="stylesheet" href="./css/lobby-mobile.css" media="(max-width:425px)">

@endsection
@section('content')
    
    @unless (Auth::check())
        Tu no estas logeado
    @endunless
<div class="contenedor">
    <div class="contenedor__main">
        <div class="contenedor__main--history">
            <div class="contenedor__main--history--item">
                
            </div>
        </div>
        <div class="contenedor__main--video">
    
            
        </div>
        <div class="contenedor__main--menu">
            <div class="contenedor__main--menu--text">
                <a href="/pabellon" class="contenedor__main--menu--text__item">Pabellón</a>
                <a href="/auditorios" class="contenedor__main--menu--text__item">Auditorios</a>
            </div>
        </div>
        <div class="contenedor__main--books">
            <a href="">
                <img src="../img/lobby/mobile/revista.png" alt="">
            </a>
            <a href="">
                <img src="../img/lobby/mobile/programa.png" alt="">
            </a>
            
        </div>
    </div>
    {{-- <div class="contenedor__footer">
        <div class="contenedor__footer--menu">
                @livewire('chat-form')   

        </div> 
        
        <div class="contenedor__footer--chat">
             <x-menu>
                
            </x-menu>
        </div>
    </div> --}}
</div>

    
@endsection
{{-- 
<x-congreso-layout>
    <main>
                {{ $slot }}
    </main>
</x-congreso-layout> --}}