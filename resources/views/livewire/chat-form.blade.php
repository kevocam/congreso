<div>
  <div class="chatButon" wire:click="showChat">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-hipchat" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
      <path d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 2.998 -3.49 2.998 -5.789c0 -4.286 -4.03 -7.764 -8.998 -7.764c-4.97 0 -9.002 3.478 -9.002 7.764c0 4.288 4.03 7.646 9 7.646c.424 0 1.12 -.028 2.088 -.084c1.262 .82 3.104 1.493 4.716 1.493c.499 0 .734 -.41 .414 -.828c-.486 -.596 -1.156 -1.551 -1.416 -2.29z" />
      <path d="M7.5 13.5c2.5 2.5 6.5 2.5 9 0" />
    </svg>
  </div>

  @if($chat)
        <div class="chat slide-in-fwd-br ">
          <div wire:click="hiddeChat" class="chat__header" wire:model="chatOpen" wire-click="">
              <div>
                  <div class="chat__header--admin">    
                    <div class="chat__header--admin--info">
                      <img src="./img/avatars/face-1.jpg" class="rounded-full ml-1" width="25" height="25">
                        <span>
                          {{auth()->user()->name}}
                      </span>
                    </div>            
                    <div class="chat__header--icon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M10 10l4 4m0 -4l-4 4" />
                      </svg>
                    </div>
                  </div>
                  
                </div>

          </div>

          <div class="chat__content">
              @foreach ($data->reverse()  as $mensaje)
                @if($mensaje->id_user === auth()->user()->id)                    
                <div class="chat__content--owner">            
                  <span class="chat__content--owner--msn">

                      {{$mensaje->content}}  
                  </span> 
                  <span  class="chat__content--owner--time">
                  {{$mensaje->created_at->diffForHumans()}}
                  </span>
                </div>
              @else
              <div class="chat__content--public">
                  <div class="chat__content--public--item">
                    <img src="./img/avatars/face-1.jpg">
                    <div class="chat__content--public--item--msn">
                        <span class="chat__content--public--item--msn--text" >
                        {{$mensaje->content}} 
                      </span>
                      <span class="chat__content--public--item--msn--time" >
                          {{$mensaje->created_at->diffForHumans()}}
                      </span>
                    </div>
                    
                  </div>
              </div>

                  @endif
              @endforeach                                 
          </div>
          <div class="chat__footer">

            <div class="chat__footer--notifications">
              @error('mensaje')
                <small >*{{ $message }} </small>
              @enderror
              <p id="notificatiton" wire:loading.delay class="text-green-500">Enviando mensaje...</p>  
            </div>  
            <div class="chat__footer--input  ">
                  <textarea wire:keydown.enter="EnviarMensaje" wire:model="mensaje" type="text" placeholder="Escribe aquí tu mensaje..."></textarea>
                  <button wire:click="EnviarMensaje" class=""> 
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-telegram"  viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                    </svg> 
                  </button>
            </div>                  
          </div>
      </div>
@endif
</div>

    

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