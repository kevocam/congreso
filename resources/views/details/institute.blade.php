@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-institute.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.institute')
    
@endsection

<script src="./js/pabellon.js"></script>