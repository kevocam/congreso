@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dau.css" >
<link rel="stylesheet" href="./css/details-dau-xl.css" media="(min-width:1024px)">
<link rel="stylesheet" href="./css/details-dau-sm.css" media="(max-width: 700px) and (orientation: landscape)">



@endsection
@section('content')

  
   
    @livewire('details.dau')
    
@endsection
