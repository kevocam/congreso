<div class="">

  <div class="h-screen bg-gray-300">
    <div class="flex justify-center items-center h-screen ">
        <div class="w-80 h-96 bg-white rounded shadow-2xl">
            <nav class="w-full h-10 bg-gray-900 rounded-tr rounded-tl flex justify-between items-center">
                <div class="flex justify-center items-center"> <i class="mdi mdi-arrow-left font-normal text-gray-300 ml-1"></i> <img src="https://i.imgur.com/IAgGUYF.jpg" class="rounded-full ml-1" width="25" height="25"> <span class="text-xs font-medium text-gray-300 ml-1">{{auth()->user()->name}}</span> </div>
                <div class="flex items-center"> <i class="mdi mdi-video text-gray-300 mr-4"></i> <i class="mdi mdi-phone text-gray-300 mr-2"></i> <i class="mdi mdi-dots-vertical text-gray-300 mr-2"></i> </div>
            </nav>

            <div class="overflow-auto px-1 py-1" style="height: 19rem;" id="journal-scroll">
              @foreach ($data->reverse()  as $mensaje)
                @if($mensaje->id_user === auth()->user()->id)
                
                <div class="flex justify-end pt-2 pl-10"> <span class="bg-green-900 h-auto text-gray-200 text-xs font-normal rounded-sm px-1 p-1 items-end flex justify-end " style="font-size: 10px;">{{$mensaje->content}}  <span class="text-gray-400 pl-1" style="font-size: 8px;">{{$mensaje->created_at->diffForHumans()}}</span></span> </div>
              @else
               <div class="flex items-center pr-10"> 
                  <img src="https://i.imgur.com/IAgGUYF.jpg" class="rounded-full shadow-xl" width="15" height="15" style="box-shadow: ">
                  <span class="flex ml-1 h-auto bg-gray-900 text-gray-200 text-xs font-normal rounded-sm px-1 p-1 items-end" style="font-size: 10px;">
                    {{$mensaje->content}} 
                    <span class="text-gray-400 pl-1" style="font-size: 8px;">{{$mensaje->created_at->diffForHumans()}}</span></span> </div>

                  @endif
              @endforeach
                
               

                <div class=" " id="chatmsg"> </div>
            </div>
            <div class="flex justify-between items-center p-1 ">
                <div class="relative"> <i class="mdi mdi-emoticon-excited-outline absolute top-1 left-1 text-gray-400" style="font-size: 17px !important;font-weight: bold;"></i> 
                  <input type="text" class="rounded-full pl-6 pr-12 py-2 focus:outline-none h-auto placeholder-gray-100 bg-gray-900 text-white" style="font-size: 11px;width: 250px;" placeholder="Únete a la conversación..." id="typemsg"> <i class="mdi mdi-paperclip absolute right-8 top-1 transform -rotate-45 text-gray-400"></i> <i class="mdi mdi-camera absolute right-2 top-1 text-gray-400"></i> </div>
                <div class="w-7 h-7 rounded-full bg-blue-300 text-center items-center flex justify-center hover:bg-gray-900 hover:text-white"> <i class="mdi mdi-microphone "></i> </div>
                <div class="w-7 h-7 rounded-full bg-blue-300 text-center items-center flex justify-center"> <button class="w-7 h-7 rounded-full text-center items-center flex justify-center focus:outline-none hover:bg-gray-900 hover:text-white" onclick="sendbtn();"><i class="mdi mdi-send "></i></button> </div>
            </div>
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
<style>
  .chatlist{
    position: absolute;
    width:250px;
    border:1px solid red;
    left:150;  
    
  }
</style>