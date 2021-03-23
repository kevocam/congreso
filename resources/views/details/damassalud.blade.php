@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-damassalud.css">
<link rel="stylesheet" href="./css/details-damassalud-xl.css" media="(min-width:1070px)">

@endsection
@section('content')

    @livewire('details.damassalud')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}