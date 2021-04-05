@extends('layouts.congreso')

@section('style')


<link rel="stylesheet" href="./css/details-ediciones.css">
<link rel="stylesheet" href="./css/details-ediciones-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/details-ediciones-xl.css" media="(min-width:1100px)">

@endsection
@section('content')

    @livewire('details.ediciones')
    
@endsection

