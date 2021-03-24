<div>
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" wire:model="user">
    </div>
    <div>
        <label for="mensaje">Mensaje</label>
        <input type="text" id="mensaje" wire:model="mensaje">
    </div>
  
    <button wire:click="EnviarMensaje" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
        Enviar
    </button>
    
  <em class="notificationChat">Mensaje enviado</em>

    
  
</div>
