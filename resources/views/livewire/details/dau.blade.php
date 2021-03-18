<div class="dau">

    <div class="dau__cartelLeft">
        <div class="dau__cartelLeft--item">
            <a href="https://wwww.facebook.com/dauperu" target="_blank">
                <img src="./img/temp/ban.png" alt="">

            </a>
        </div>
    </div>

    <div class="dau__video">
        <div class="dau__video--item">
            <img wire:click="openModal" src="https://img.icons8.com/color/48/000000/play-button-circled--v1.png"/>
        </div>
    </div>
    <div class="dau__cartelRight">
        <div class="dau__cartelRight--item">
            <a href="https://wwww.facebook.com/dauperu" target="_blank">
                <img src="./img/temp/diplomado.jpg" alt="">
            </a>
        </div>

    </div>
    <div class="dau__banner">
        
        <div class="dau__banner--item">
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
            <iframe style="width:100%" src="https://www.youtube.com/embed/OxhqqJa9Qe4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                         
        </x-slot>
    
        <x-slot name="footer">
          
    
        </x-slot>
    </x-jet-dialog-modal>
</div>
    