@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-humanizando.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.humanizando')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}