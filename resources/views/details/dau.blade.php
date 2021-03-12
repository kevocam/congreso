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
              <img src="../img/details/dau/cartel1.png" alt="cartel1">

            </div>
            <div class="contenedor__footer--chat">
                <img src="../img/details/dau/cartel2.png" alt="cartel1">
                <img src="../img/details/dau/banner.png" alt="cartel1">

            </div>
            

        </div>
    </div>

    
@endsection

<script src="./js/pabellon.js"></script>