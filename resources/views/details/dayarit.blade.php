@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dayarit.css">
<link rel="stylesheet" href="./css/details-dayarit-xl.css" media="(min-width:1070px)">

@endsection
@section('content')

    @livewire('details.dayarit')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}