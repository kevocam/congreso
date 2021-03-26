<div>

    <h5 class="my-3"> <strong> Lista de mensajes </strong></h5>
    
    @foreach ($data->reverse()  as $mensaje)
      <li>{{$mensaje->content}}</li>
        
    @endforeach


    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('25867855afbf586efaa2', {
          cluster: 'us2'
        });
    
        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
          window.livewire.emit("actualizarMensajes", data)
        });
      </script>
</div>
