@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-ediciones.css">
<link rel="stylesheet" href="./css/details-ediciones-xl.css" media="(min-width:1070px)">
@endsection
@section('content')

    @livewire('details.ediciones')
    
@endsection

