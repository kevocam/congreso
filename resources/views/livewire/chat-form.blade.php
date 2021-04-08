<div class="chat">
    <div class="chat__header">
        <nav class="w-full h-10 bg-gray-900 rounded-tr rounded-tl flex justify-between items-center">
            <div class="flex justify-center items-center"> <i class="mdi mdi-arrow-left font-normal text-gray-300 ml-1"></i> <img src="https://i.imgur.com/IAgGUYF.jpg" class="rounded-full ml-1" width="25" height="25"> <span class="text-xs font-medium text-gray-300 ml-1">{{auth()->user()->name}}</span> </div>
            <div class="flex items-center"> <i class="mdi mdi-video text-gray-300 mr-4"></i> <i class="mdi mdi-phone text-gray-300 mr-2"></i> <i class="mdi mdi-dots-vertical text-gray-300 mr-2"></i> </div>
        </nav>

    </div>
    <div class="chat__content overflow-auto px-1 py-1" style="height: 19rem;" id="journal-scroll">
        @foreach ($data->reverse()  as $mensaje)
          @if($mensaje->id_user === auth()->user()->id)                    
          <div class="flex justify-end pt-2 pl-10"> 
            <span class="bg-green-900 h-auto text-gray-200 text-xs font-normal rounded-sm px-1 p-1 items-end flex justify-end " style="font-size: 10px;">{{$mensaje->content}}  <span class="text-gray-400 pl-1" style="font-size: 8px;">{{$mensaje->created_at->diffForHumans()}}</span></span> 
          </div>
        @else
        <div class="flex items-center pr-10"> 
            <img src="https://i.imgur.com/IAgGUYF.jpg" class="rounded-full shadow-xl" width="15" height="15" style="box-shadow: ">
            <span class="flex ml-1 h-auto bg-gray-900 text-gray-200 text-xs font-normal rounded-sm px-1 p-1 items-end" style="font-size: 10px;">
              {{$mensaje->content}} 
              <span class="text-gray-400 pl-1" style="font-size: 8px;">{{$mensaje->created_at->diffForHumans()}}</span></span>
        </div>

            @endif
        @endforeach                                 
    </div>
    <div class="chat__footer">
        @error('mensaje') <small class="text-red-500">{{ $message }}</small> @enderror
        <em id="notificatiton" wire:loading.delay class="text-green-500">Enviando mensaje...</em>   
        <div class="flex justify-between items-center p-1 ">

            <div class="relative"> <i class="mdi mdi-emoticon-excited-outline absolute top-1 left-1 text-gray-400" style="font-size: 17px !important;font-weight: bold;"></i>
              <input id="mensaje" wire:model="mensaje" type="text" placeholder="Únete a la conversación..." id="typemsg"> <i class="mdi mdi-paperclip absolute right-8 top-1 transform -rotate-45 text-gray-400"></i> <i class="mdi mdi-camera absolute right-2 top-1 text-gray-400"></i> </div>
              
              <button wire:click="EnviarMensaje" class="w-8 h-8 rounded-full bg-blue-300 text-center items-center flex justify-center hover:bg-gray-900 hover:text-white"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-telegram" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#096191" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                </svg> 
              </button>                
        </div>              
    </div>
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