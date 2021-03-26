@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/auditorio.css"> 
<link rel="stylesheet" href="./css/auditorio-xl.css" media="(min-width:1070px)">


@endsection

    @section('content')    
        <div class="contenedor">
            @livewire('auditorio-normal')    
        </div>    
    @endsection
