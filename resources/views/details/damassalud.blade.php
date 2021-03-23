@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-damassalud.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.damassalud')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}