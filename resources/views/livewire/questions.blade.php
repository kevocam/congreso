<div>
    <div >
        <a href="/auditorios" type="button" class="QuestionButtonOff">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                <path d="M7 12h14l-3 -3m0 6l3 -3" />
              </svg>
        </a>
        <button class="QuestionButton" type="button" wire:click="showModal">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-question-mark" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" />
                <line x1="12" y1="19" x2="12" y2="19.01" />
              </svg>
            
        </button>
    </div>
    @if($showModal)

    <div class="overlay">

    </div>    
    <div class="modalQuestion slide-in-elliptic-top-fwd ">

            <h2>Canal de preguntas.</h2>
        
            <textarea wire:model="question" class="modalQuestion__input" type="text" placeholder="Escriba aquí su pregunta..."></textarea>
            @error('question') 
                <span class="modalQuestion__error">*{{ $message }}</span> 
            @enderror
            @if (session()->has('message'))                
                <small class="modalQuestion__notification" > {{ session('message') }} </small>
            @endif



            <button wire:click="store" class="modalQuestion__button" type="submit">Enviar pregunta <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="10" y1="14" x2="21" y2="3" />
                <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
              </svg>
            </button>
            
            <p wire:click="closeModal" class="modalQuestion__close">Cerrar 
                
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
