<div>
    <div class="w-1/4">
        <input type="text" id="rounded-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" wire:model="search" type="search" placeholder="Buscar asistente...">
    </div>
<table wire:loading.class="opacity-40" class="table p-4 bg-white shadow rounded-lg">
    <thead>
        <tr>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                #
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Nombres
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Apellidos
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Correo
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Salas Permitidas
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
    @forelse ($data as $dato)
        
        <tr class="text-gray-700">
            <td class="border p-4 dark:border-dark-5">
                {{$contador++}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dato->name}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dato->lastName}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dato->email}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{ implode (', ', $dato->roles()->get()->pluck('name')->toArray()) }}
            </td>
            <td class="border p-4 dark:border-dark-5">
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
        

        {{-- <div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
            <div class="px-4 py-8 sm:px-10">
                <div class="relative mt-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300">
                        </div>
                    </div>
                    <div class="relative flex justify-center text-sm leading-5">
                        <span class="px-2 text-gray-500 bg-white">
                            Editar Asistente
                        </span>
                    </div>
                </div> --}}
                
        
                <form wire:submit.prevent="save" class="container-lg  mx-auto shadow-md md:w-3/4">
                    

                <div class="mt-6">
                    <div class="w-full space-y-6">
                        <div class="w-full">
                            <div class=" relative ">
                                <input Wire:model="editing.email" type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your price"/>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class=" relative ">
                                    <input wire:model="editing.name" type="text" id="search-form-location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your location"/>
                                    </div>
                                </div>
                                <div class="w-full">
                                   {{--  <div class=" relative ">
                                        <input type="text" id="search-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your name"/>
                                        </div>
                                    </div> --}}
                                    <div>
                                        <span class=" w-full rounded-md shadow-sm flex">
                                            
                                            <button wire:click="$set('showEditModel',false)" type="button" class="py-2 px-4  text-indigo-700 hover:bg-indigo-700 hover:text-white focus:ring-indigo-500 focus:ring-offset-indigo-200  w-3/4 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
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
</div>
