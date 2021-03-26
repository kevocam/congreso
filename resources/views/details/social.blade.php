@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-social.css">
<link rel="stylesheet" href="./css/details-social-xl.css" media="(min-width:1070px)">
@endsection
@section('content')

    @livewire('details.social')
    
@endsection

