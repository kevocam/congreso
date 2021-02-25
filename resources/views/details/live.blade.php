@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/pabellon-xl.css">
<link rel="stylesheet" href="./css/details.css">

@endsection
@section('content')

    @unless (Auth::check())
        Sitio restringido, solo usuarios registrados.
    @endunless
    <div class="contenedor">
        
        @livewire('detail-live')

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

<script src="./js/pabellon.js"></script>