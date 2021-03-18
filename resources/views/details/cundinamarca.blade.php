@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-cundinamarca.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.cundinamarca')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}