@extends('layouts.congreso')

@section('style')



<link rel="stylesheet" href="./css/details-social.css">
<link rel="stylesheet" href="./css/details-social-m.css" media="(min-width:930px)" >
<link rel="stylesheet" href="./css/details-social-xl.css" media="(min-width:1100px)" >

<link rel="stylesheet" href="./css/animations.css">
@endsection
@section('content')

    @livewire('details.social')
    
@endsection

