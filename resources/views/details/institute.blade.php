@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-institute.css">
<link rel="stylesheet" href="./css/details-institute-m.css" media="(min-width:930px)" >
<link rel="stylesheet" href="./css/details-institute-xl.css" media="(min-width:1100px)" >


@endsection
@section('content')

    @livewire('details.institute')
    
@endsection
