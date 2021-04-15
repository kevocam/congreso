<div>


    
<label wire:model="auditorio" class="text-gray-700" for="animals">
    Auditorio
    <select  class="block w-52 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
        <option value="1">Auditorio 1</option>
    <option value="2">Auditorio 2</option>
    <option value="3">Auditorio 3</option>
    <option value="4">Auditorio 4</option>
    <option value="5">Auditorio 5</option>
    </select>
</label>



<table class="table p-4 bg-white shadow rounded-lg">
    <thead>
        <tr>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                #
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
               Pregunta
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Usuario
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Auditorio 
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Hora 
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dat)

        <tr class="text-gray-700">
            
            <td class="border p-4 dark:border-dark-5">
                #
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dat->question}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dat->user->name}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dat->audience}}
            </td>
            <td class="border p-4 dark:border-dark-5">
                {{$dat->created_at->diffForHumans()}}
            </td>
        </tr>
        @endforeach

        {{ $data->links() }}
    </tbody>
</table>

    
</div>
