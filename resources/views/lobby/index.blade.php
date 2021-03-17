@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/lobby-xl.css"> 
<link rel="stylesheet" href="./css/lobby-tablet.css" media="(max-width:930px)"> 
<link rel="stylesheet" href="./css/lobby-mobile.css" media="(max-width:425px)">

@endsection
@section('content')
    
    @unless (Auth::check())
        tu no estas logeado
    @endunless
    <div class="contenedor">

    <div class="contenedor__main">
    </div>
        <div class="contenedor__footer">
            <div class="contenedor__footer--menu">
               
            </div> 
           
            <div class="contenedor__footer--chat">
              <x-menu>
                  
              </x-menu>
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