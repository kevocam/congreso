@extends('layouts.administrador')
@section('title')
<div class="text-primary-dark dark:text-light">
    Ver asistentes

</div>
@endsection
@section('content')

<div class="w-100 mx-auto">

    @livewire('view-asistente')
</div>

@endsection

