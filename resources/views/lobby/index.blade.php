@extends('layouts.congreso')


@section('content')

    @unless (Auth::check())
        tu no estas logeado
    @endunless

    <h2>Página de Lobby</h2>
    <x-menu>
       
    </x-menu>

    
@endsection
{{-- 
<x-congreso-layout>
    <main>
                {{ $slot }}
    </main>
</x-congreso-layout> --}}