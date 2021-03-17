@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-social.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.social')
    
@endsection

<script src="./js/pabellon.js"></script>