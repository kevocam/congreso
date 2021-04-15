@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/auditorio-cinco.css">
<link rel="stylesheet" href="./css/auditorio-cinco-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/auditorio-cinco-xl.css" media="(min-width:1100px)">


@endsection

    @section('content')    
        <div class="contenedor">
            @livewire('auditorio.cinco')    
        </div>    
    @endsection
