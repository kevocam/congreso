@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-damassalud.css" {{-- media="(max-width: 780px)" --}}>
<link rel="stylesheet" href="./css/details-damassalud-m.css" media="(min-width:930px)" >
<link rel="stylesheet" href="./css/details-damassalud-xl.css" media="(min-width:1100px)">  

@endsection
@section('content')

    @livewire('details.damassalud')
    
@endsection

