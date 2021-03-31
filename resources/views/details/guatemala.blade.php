@extends('layouts.congreso')

@section('style')


<link rel="stylesheet" href="./css/details-guatemala.css">
<link rel="stylesheet" href="./css/details-guatemala-m.css" media="(min-width:930px)" >
<link rel="stylesheet" href="./css/details-guatemala-xl.css" media="(min-width:1100px)" >

@endsection
@section('content')

    @livewire('details.guatemala')
    
@endsection

