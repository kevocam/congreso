<div>
<div>
        <label for="nombre">Nmober</label>
        <input type="text" id="nombre" wire:model="user">
    </div>
    <div>
        <label for="mensaje">Mensaje</label>
        <input type="text" id="mensaje" wire:model="mensaje">
    </div>
  {{$mensaje}}
    <button wire:click="enviarMensaje">
        Enviar
    </button>
  <script>
    window.livewire.on("mensajeEncviado", () =>{
      alert("evento ON")

    });


  </script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('25867855afbf586efaa2', {
          cluster: 'us2'
        });
    
        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
          alert(JSON.stringify(data));
        });
      </script> 
</div>
