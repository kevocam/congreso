@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/auditorio-tres.css">
<link rel="stylesheet" href="./css/auditorio-tres-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/auditorio-tres-xl.css" media="(min-width:1100px)">
<link rel="stylesheet" href="./css/question.css">


@endsection

    @section('content')    
        <div class="contenedor">
            @livewire('auditorio.tres')    
        </div>    
    @endsection
