@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dominicana.css">
<link rel="stylesheet" href="./css/details-dominicana-xl.css" media="(min-width:1070px)">
@endsection
@section('content')

    @livewire('details.dominicana')
    
@endsection

