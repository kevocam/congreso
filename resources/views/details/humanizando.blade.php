@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-humanizando.css">
<link rel="stylesheet" href="./css/details-humanizando-xl.css" media="(min-width:1070px)">

@endsection
@section('content')

    @livewire('details.humanizando')
    
@endsection

