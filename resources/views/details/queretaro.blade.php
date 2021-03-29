@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/details-queretaro.css">
<link rel="stylesheet" href="./css/details-queretaro-xl.css" media="(min-width:1070px)">
@endsection
@section('content')

    @livewire('details.queretaro')
    
@endsection

