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
    <button wire:click="EnviarMsn">
        Enviar
    </button>
  <script>
   /*  window.livewire.on("mensajeEnviado", function(){
      alert("notification ON")
    }); */
    Livewire.on("EnviarMsn", ()=>{
      alert("fsd");
    })
   /*  Livewire.on('EnviarMsn', () => {
    alert('A post was added with the id of: ' );
}) */

  </script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    {{-- <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('25867855afbf586efaa2', {
          cluster: 'us2'
        });
    
        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
          alert(JSON.stringify(data));
        });
      </script>  --}}
</div>
