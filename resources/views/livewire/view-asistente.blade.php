<div>

<table class="table p-4 bg-white shadow rounded-lg">
    <thead>
        <tr>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                #
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Nombre
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Correo
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-blue-900">
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($data as $dato)
        
        <tr class="text-gray-700">
            <td class="border p-4 dark:border-dark-5">
                {{$contador++}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dato->name}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dato->email}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{-- {{ implode (',', $dato->roles()->get()->pluck('name')->toArray()) }} --}}

                <button onclick="return confirm('¿Seguro de borrar?')" class="animationSimple px-3 py-1 text-base rounded-full text-red-600  bg-red-200" wire:click="delete({{$dato->id}})">
                    Borrar
                </button>
            </td>
            
            
        </tr>
    @endforeach
    
    {{ $data->links() }}
</tbody>
</table>

   
</div>
