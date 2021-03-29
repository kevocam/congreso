@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dau.css" >
<link rel="stylesheet" href="./css/details-dau-xl.css" media="(min-width:1024px)">
<link rel="stylesheet" href="./css/details-dau-sm.css" media="(max-device-width: 700px)">



@endsection
@section('content')

  
   
    @livewire('details.dau')
    
@endsection
