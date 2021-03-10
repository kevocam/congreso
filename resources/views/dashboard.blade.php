@extends('layouts.master')
@section('content')


@if(@Auth::user()->hasRole('asistente'))
    <h2>Bienvenido Asistente</h2>
@endif
 <x-resume >
   
 </x-resume>   
 
{{--  @livewire('info' , ['name'=>"desde la llamasdas"] );
 --}} 
@endsection

