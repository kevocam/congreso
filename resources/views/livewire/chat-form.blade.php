<div>
    <div>
        <label for="nombre">Mensaje</label>
        <input type="text" id="nombre" wire:model="mensaje">
    </div>
    {{$user = auth()->id()}}
    <button wire:click="enviarMensaje">
        Enviar
    </button>

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