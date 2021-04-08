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
                <input wire:model="photo" type="file" >

            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Nombres:
                </label>
            </div>
            <div class="inputCustom__input">
                <input wire:model="name" type="text" >
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Apellidos:
                </label>
            </div>
            <div class="inputCustom__input">
                <input wire:model="lastName" type="text" >
            </div>
        </div>        
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Dirección:
                </label>
            </div>
            <div class="inputCustom__input">
                <input wire:model="address" type="text">
                
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Email:
                </label>
            </div>
            <div class="inputCustom__input">
                <input type="email" wire:model="email" >                               
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Teléfono:
                </label>
            </div>
            <div class="inputCustom__input">
                <input wire:model="phone" name="" type="text" id="" >
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Descripción:
                </label>
            </div>
            <div class="inputCustom__input">
                <textarea wire:model="description"  ></textarea>
                
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                    Presentación:
                </label>
            </div>
            <div class="inputCustom__input">
                <textarea wire:model="about" name="" id="" ></textarea>
                
            </div>
        </div>
        <div class="inputCustom">
            <div class="inputCustom__label">
                <label>
                Idiomas
                </label>
               
            </div>
            <div class="inputCustom__input input--rrss">
               
                <div class="flex "> 
                    <label   for="" class="w-1/4">Español</label>
                    <select wire:model="rateSpanish" class="w-1/4" name="" id="">
                        <Option value="1">1</Option>
                        <Option value="2">2</Option>
                        <Option value="3">3</Option>
                        <Option value="4">4</Option>
                        <Option value="5">5</Option>
                    </select>

                </div>
                <div class="flex "> 
                    <label for="" class="w-1/4">Ingles</label>
                    <select wire:model="rateEnglish"  class="w-1/4" name="" id="">
                        <Option value="1">1</Option>
                        <Option value="2">2</Option>
                        <Option value="3">3</Option>
                        <Option value="4">4</Option>
                        <Option value="5">5</Option>
                    </select>
                </div>
                <div class="flex "> 
                    <input wire:model="OtherLanguaje" type="text " class="block focus:outline-none focus:ring focus:border-blue-300 w-1/2">
                    <select wire:model="rateOther" class="w-1/2" name="" id="">
                        <Option value="1">1</Option>
                        <Option value="2">2</Option>
                        <Option value="3">3</Option>
                        <Option value="4">4</Option>
                        <Option value="5">5</Option>
                    </select>
                </div>
                
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
