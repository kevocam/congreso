@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-gray.css">
{{-- <link rel="stylesheet" href="./css/details.css">
 --}}
@endsection
@section('content')

    @livewire('details.gray')
    
@endsection

{{-- <script src="./js/pabellon.js"></script> --}}