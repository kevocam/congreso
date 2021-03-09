<div>

    <h5 class="my-3"> <strong> Lista de mensajes </strong></h5>
   {{--  @foreach ($mensajes as $mensaje)
    <li>{{$mensaje->id_user}}</li>
        
    @endforeach --}}
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
