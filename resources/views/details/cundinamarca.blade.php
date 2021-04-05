@extends('layouts.congreso')

@section('style')


<link rel="stylesheet" href="./css/details-cundinamarca.css">
<link rel="stylesheet" href="./css/details-cundinamarca-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/details-cundinamarca-xl.css" media="(min-width:1100px)">


@endsection
@section('content')

    @livewire('details.cundinamarca')
    
@endsection

