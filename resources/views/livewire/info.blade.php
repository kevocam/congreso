<div>
   @foreach ($data as $dato)
       Hola {{$dato->name}}
   @endforeach


   <button wire:click="refresh">Refrescar</button>
</div>
