@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dau.css" >
<link rel="stylesheet" href="./css/details-dau-xl.css" media="(min-width:1024px)">
<link rel="stylesheet" href="./css/details-dau-sm.css" media="(max-width: 767px)">



{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    {{-- @unless (Auth::check())
        Sitio restringido, solo usuarios registrados.
    @endunless --}}
   
    @livewire('details.dau')
    
@endsection

<script src="./js/pabellon.js"></script>