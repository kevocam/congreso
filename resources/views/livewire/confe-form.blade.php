<div class="confeForm">
    
    <form wire:submit.prevent="store" class="form">
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Fotografía:
                </label>
            </div>
            <div class="inputCustom__input">
                @if ($photo)
                    Previzualización
                    <img style="max-width:80px" src="{{ $photo->temporaryUrl() }}">
                @endif
                <input wire:model="photo" type="file" name="" id="">

            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Nombres:
                </label>
            </div>
            <div class="inputCustom__input">
                <input wire:model="name" type="text" placeholder="Nombre y apellido">
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Descripción:
                </label>
            </div>
            <div class="inputCustom__input">
                <textarea wire:model="description" name="" id="" ></textarea>
                
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                        Redes Sociales:
                </label>
                <em>Opcional</em>
            </div>
            <div class="inputCustom__input input--rrss">
                <input wire:model="facebook" type="text" placeholder="Facebook">
                <input wire:model="twitter" type="text" placeholder="Twitter">
                <input wire:model="linkedin" type="text" placeholder="Linkedin">
                
            </div>
        </div>
        <div class="formFooter">
            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="submit">
                Guardar
            </button>

        </div>
    </form>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
</div>
