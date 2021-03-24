@extends('layouts.master')
@section('content')

@livewire('chat-form');

@livewire('chat-list');
 

@endsection

@section('js')

{{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}
<script>
    window.livewire.on("mensajeEnviado", function(){
/*       alert("asddsa");
 */    })
</script>
    
@endsection