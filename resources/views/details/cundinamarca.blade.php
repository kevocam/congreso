@extends('layouts.congreso')

@section('style')
    <link rel="stylesheet" href="./css/details-cundinamarca.css">
    <link rel="stylesheet" href="./css/details-cundinamarca-xl.css" media="(min-width:1070px)">


@endsection
@section('content')

    @livewire('details.cundinamarca')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}