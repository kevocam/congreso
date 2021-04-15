<div>
    <div class="InformationButton">
        <button wire:click="showModal">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <line x1="12" y1="8" x2="12.01" y2="8" />
                <polyline points="11 12 12 12 12 16 13 16" />
              </svg>
            
        </button>
    </div>
    @if($showModal)

    <div class="overlay">

    </div>    
    <div class="modalInformation slide-in-elliptic-top-fwd ">

            <h2>Informes </h2>
        
            <textarea wire:model="question" class="modalInformation__input" type="text" placeholder="Escriba aquí su pregunta..."></textarea>
            @error('question') 
                <span class="modalInformation__error">*{{ $message }}</span> 
            @enderror
            
                        
            <input wire:model="email" type="email" class="modalInformation__input"  placeholder="Email">
            @error('email') 
                <span class="modalInformation__error">*{{ $message }}</span> 
            @enderror
            <input wire:model="phone" type="number" class="modalInformation__input" placeholder="teléfono">
            @error('phone') 
                <span class="modalInformation__error">*{{ $message }}</span> 
            @enderror

            @if (session()->has('message'))                
            <small class="modalInformation__notification" > {{ session('message') }} </small>
            @endif

            <button wire:click="store" class="modalInformation__button" type="submit">
                Enviar                
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="10" y1="14" x2="21" y2="3" />
                <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
                </svg>
            </button>
            
            <p wire:click="closeModal" class="modalInformation__close">Cerrar 
                
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-minimize" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="5 9 9 9 9 5" />
                <line x1="3" y1="3" x2="9" y2="9" />
                <polyline points="5 15 9 15 9 19" />
                <line x1="3" y1="21" x2="9" y2="15" />
                <polyline points="19 9 15 9 15 5" />
                <line x1="15" y1="9" x2="21" y2="3" />
                <polyline points="19 15 15 15 15 19" />
                <line x1="15" y1="15" x2="21" y2="21" />
                </svg>
            </p>
    </div>
    @endif
    
</div>
