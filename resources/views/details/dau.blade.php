@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-dau-sm.css" {{-- media="(max-width: 780px)" --}}>
<link rel="stylesheet" href="./css/details-dau.css" media="(min-width:930px)" >

<link rel="stylesheet" href="./css/details-dau-xl.css" media="(min-width:1100px)">  


@endsection
@section('content')   

@livewire('details.dau')
    
@endsection
