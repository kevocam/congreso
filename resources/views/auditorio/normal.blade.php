@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/auditorio.css"> 

@endsection

    @section('content')    
        <div class="contenedor">
            @livewire('auditorio-normal')    
        </div>    
    @endsection
