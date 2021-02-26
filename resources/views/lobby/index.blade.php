@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/lobby-xl.css">
@endsection
@section('content')
    
    @unless (Auth::check())
        tu no estas logeado
    @endunless
    <div class="contenedor">
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