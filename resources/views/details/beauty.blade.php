@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-beauty.css">
<link rel="stylesheet" href="./css/details-beauty-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/details-beauty-xl.css" media="(min-width:1100px)">

@endsection
@section('content')
    @livewire('details.beauty')    
@endsection

