@extends('layouts.congreso')

@section('style')


<link rel="stylesheet" href="./css/details-dayarit.css">
<link rel="stylesheet" href="./css/details-dayarit-m.css" media="(min-width:930px)" >
<link rel="stylesheet" href="./css/details-dayarit-xl.css" media="(min-width:1100px)" >

@endsection
@section('content')

    @livewire('details.dayarit')
    
@endsection

