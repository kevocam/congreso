@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dominicana.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.dominicana')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}