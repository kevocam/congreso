
<div class="dau">
    <div class="dau__cartelLeft ">
        <div class="dau__cartelLeft--item tilt-in-left-1">
            <a href="https://wwww.facebook.com/dauperu" target="_blank">
                <img src="./img/temp/ban.png" alt="">
            </a>
        </div>
    </div>

    <div class="dau__video">
        <div class="dau__video--item" wire:click="openModal" id="btnPlay">
            {{-- <img wire:click="openModal" id="btnPlay" src="https://img.icons8.com/color/48/000000/play-button-circled--v1.png"/> --}}
        </div>
    </div>
    <div class="dau__cartelRight">
        <div class="dau__cartelRight--item tilt-in-right-1">
            <a href="https://wwww.facebook.com/dauperu" target="_blank">
                <img src="./img/temp/diplomado.jpg" alt="">
            </a>
        </div>

    </div>
    <div class="dau__banner">
        
        <div class="dau__banner--item tilt-in-top-2">
            <div class="dau__banner--item--title">
                Libros 
            </div>
            <img src="./img/temp/book1.png" alt="">
            <img src="./img/temp/book2.png" alt="">
            <img src="./img/temp/book3.png" alt="">           

        </div>
    </div>

   
    
    <x-jet-dialog-modal wire:model.defer="isOpen">
        <x-slot name="title">
            Video
        </x-slot>
    
        <x-slot name="content" >            
            <iframe width="380" height="315" src="https://www.youtube.com/embed/OxhqqJa9Qe4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </x-slot>
    
        <x-slot name="footer">
          
    
        </x-slot>
    </x-jet-dialog-modal>
{{--     <audio id="audio" src="./img/sound.mp3"></audio>
 --}}
    <div class="iconRotate" hidden>
        <em>Gire el telefono</em>
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 16C24 13.7909 25.7909 12 28 12H52C54.2091 12 56 13.7909 56 16V64C56 66.2091 54.2091 68 52 68H28C25.7909 68 24 66.2091 24 64V16Z" stroke="#096191" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M41 64H39" stroke="#096191" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M56 60H24" stroke="#096191" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M56 20H24" stroke="#096191" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M44 16H36" stroke="#096191" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
    </div>
</div>
    

<script>

    var audio = document.getElementById("audio");
    var btnPlay = document.getElementById("btnPlay");
       
    btnPlay.addEventListener("click", function(){
            audio.play();
        });

        
            
        
   
</script>