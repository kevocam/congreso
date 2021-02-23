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
                    Photo Preview:
                    <img style="max-width:50px" src="{{ $photo->temporaryUrl() }}">
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
            <button class="btnPrimary" type="submit">
                Guardar
            </button>

        </div>
    </form>
    @if (session()->has('message'))
    <div class="">
        {{ session('message') }}
    </div>
@endif
</div>
