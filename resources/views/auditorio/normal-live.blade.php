@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/auditorio.css">
<link rel="stylesheet" href="./css/auditorio-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/auditorio-xl.css" media="(min-width:1100px)">


@endsection

@section('content')    
    <div class="contenedor">
        @livewire('auditorio.normal-live')    
    </div>    
@endsection
