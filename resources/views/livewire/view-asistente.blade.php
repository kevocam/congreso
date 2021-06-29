<div class="w-full">
    <div class="flex">
        <div class="w-1/2">
            <input type="text" id="rounded-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" wire:model="search" type="search" placeholder="Buscar asistente...">
        </div>
        @if (session()->has('message'))
                <div class="alert alert-success w-1/2  flex">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                      </svg>
                    {{ session('message') }}
                </div>
        @endif



    </div>
    <table wire:loading.class="opacity-40" class="m-2 w-full table p-2 bg-white shadow rounded-lg bg-white border-r dark:border-primary-darker dark:bg-darker">
        <thead>
            <tr>
                <th class=" tracking-wider text-primary-dark dark:text-light border p-3 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                    #
                </th>
                <th class="tracking-wider  text-primary-dark dark:text-light  border p-3 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                    Nombres
                </th>
                <th class="text-primary-dark dark:text-light border p-3 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                    Apellidos
                </th>
                <th class="text-primary-dark dark:text-light border p-3 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                    Correo
                </th>
                <th class="text-primary-dark dark:text-light border p-3 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                    Salas Permitidas
                </th>
                <th class="text-primary-dark dark:text-light border p-3 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
        @forelse ($data as $dato)
            
            <tr class="text-gray-700">
                <td class="dark:text-light hover:bg-primary-100 dark:hover:bg-primary  text-center	 border p-4 dark:border-dark-5">
                    {{$contador++}}
                </td>
                <td class="dark:text-light hover:bg-primary-100 dark:hover:bg-primary  text-center	 border p-4 dark:border-dark-5">
                    {{$dato->name}}
                </td>
                <td class="dark:text-light hover:bg-primary-100 dark:hover:bg-primary  text-center	 border p-4 dark:border-dark-5">
                    {{$dato->lastName}}
                </td>
                <td class="dark:text-light hover:bg-primary-100 dark:hover:bg-primary  text-center	 border p-4 dark:border-dark-5">
                    {{$dato->email}}
                </td>
                <td class="dark:text-light hover:bg-primary-100 dark:hover:bg-primary  text-center	 border p-4 dark:border-dark-5">
                    {{ implode (', ', $dato->roles()->get()->pluck('name')->toArray()) }}
                </td>
                <td class="dark:text-light hover:bg-primary-100 dark:hover:bg-primary  text-center	 border p-4 dark:border-dark-5">
                    {{-- {{ implode (',', $dato->roles()->get()->pluck('name')->toArray()) }} --}}
                    
                <button wire:click="edit({{$dato->id}})" class="animationSimple px-3 py-1 text-xs rounded-full  bg-indigo-300 hover:bg-indigo-600 hover:text-white"  wire:click="delete({{$dato->id}})">
                    Editar
                </button>
                <button onclick="return confirm('¿Seguro de borrar?')" class="text-xs animationSimple px-3 py-1 rounded-full bg-red-300 hover:bg-red-600 hover:text-white " wire:click="delete({{$dato->id}})">
                    Borrar
                </button>
                        
                    
                </td>
                
                
            </tr>
            
            @empty
        </tbody>
    </table>
    
        <div colspan="4">
            <div class=" row flex justify-center items-center">
                <span class="font-medium py-8 text-xl">
                    No se encontraron resultados...
                </span>
            </div>
        </div>              
           
            
        @endforelse
        
        {{ $data->links() }}
    </tbody>
    </table>


<x-jet-dialog-modal wire:model.defer="showEditModel">
    <x-slot name="title">
        Editar Asistente
    </x-slot>

    <x-slot name="content" >                
        
    <form wire:submit.prevent="save" class="container-lg  mx-auto shadow-md md:w-3/4">       

    <div class="mt-6">
        <div class="w-full space-y-6">
            <div class="w-full">
                <div class=" relative ">
                    <label for="">Correo:</label>
                    <input Wire:model="email" type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your price"/>
                    </div>
                </div>
                <div class="w-full">
                    
                    <div class=" relative ">
                        <label for="">Nombres</label>
                        <input wire:model="name" type="text" id="search-form-location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your location"/>
                        </div>
                </div>
                <div class="w-full">
                    <div class=" relative ">
                        <label for="">Apellidos</label>
                        <input wire:model="lastName" type="text" id="search-form-location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your location"/>
                    </div>
                </div>

                <div class="w-full">
                    <label for="">Talleres:</label>
                    <hr class="m-1">


                    <div class="flex justify-center items-center gap-2">
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="taller1" type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle" class="text-xs text-gray-700">Taller 1</label>
    
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="taller2" type="checkbox" name="toggle2" id="toggle2" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle2" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle2" class="text-xs text-gray-700">Taller 2</label>
    
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="taller3" type="checkbox" name="toggle3" id="toggle3" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle3" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle2" class="text-xs text-gray-700">Taller 3</label>
                        
                    </div>
                    
                    <div class="flex justify-center items-center gap-2 mt-4">   
                                   
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="taller4" type="checkbox" name="toggle4" id="toggle4" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle4" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle4" class="text-xs text-gray-700">Taller 4</label>
    
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="taller5" type="checkbox" name="toggle5" id="toggle5" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle5" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle5" class="text-xs text-gray-700">Taller 5</label>
    
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="taller6" type="checkbox" name="toggle6" id="toggle6" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle6" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle6" class="text-xs text-gray-700">Taller 6</label>
                        
                    </div>
                </div>
                <div class="w-full">
                    <div class=" relative ">
                        <label for="">Congreso:</label>
                        <hr class="m-1">
                <div class="flex justify-center items-center gap-2">                               
                    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                        <input wire:model="congreso" type="checkbox" name="congreso" id="congreso" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                        <label for="congreso" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                    </div>
                    <label for="congreso" class="text-xs text-gray-700">4 Auditorios</label>                    
                </div> 
                        
                    </div>
                </div>

                <div class="w-full">
                    {{--  <div class=" relative ">
                        <input type="text" id="search-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your name"/>
                        </div>
                    </div> --}}
                    <div>
                        <span class=" w-full rounded-md shadow-sm flex">
                            
                            <button wire:click="closeModal" type="button" class="py-2 px-4  text-indigo-700 hover:bg-indigo-700 hover:text-white focus:ring-indigo-500 focus:ring-offset-indigo-200  w-3/4 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Cancelar
                            </button>
                            <button type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-3/4 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Guardar
                            </button>
                        </span>
                    </div>
                </div>
                </div>
            </div>
            
        </div>

    </form>
                

    </x-slot>

    <x-slot name="footer">
      
sadasdads   
    </x-slot>
</x-jet-dialog-modal>

{{-- 
<x-jet-confirmation-modal >
   
    <x-slot name="title">
        Delete Account
    </x-slot>

    <x-slot name="content">
        Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
            Nevermind
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
            Delete Account
        </x-jet-danger-button>
    </x-slot>

</x-jet-confirmation-modal> --}}


<style>

    .toggle-checkbox:checked {
      @apply: right-0 border-green-400;
      right: 0;
      border-color: #68D391;
    }
    .toggle-checkbox:checked + .toggle-label {
      @apply: bg-green-400;
      background-color: #68D391;
    }
        </style>
</div>
