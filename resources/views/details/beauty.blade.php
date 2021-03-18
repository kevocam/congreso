@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-beauty.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.beauty')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}