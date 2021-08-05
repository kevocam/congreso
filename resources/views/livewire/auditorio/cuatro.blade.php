<div class="auditorioBlue">
    <div class="auditorioBlue__cartelLeft animation-cartelLeft ">
        <div class="auditorioBlue__cartelLeft--item">
 
        </div>
    </div>
    <div class="auditorioBlue__pantalla animation-player animation-player ">
 
      <iframe  src="https://www.youtube-nocookie.com/embed/mcr1tCXA8EA?modestbranding=1&rel=0"
 title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
 encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 
   </div>
    <div class="auditorioBlue__cartelRight animation-cartelRight ">
        <div class="auditorioBlue__cartelRight--item">
         <div class="cartelCustom__item--top">
            <p>
               COORDINADOR <br>
               DE SALA
            </p>
            <a href="">
               <img src="./img/avatar.jpg" alt="">            
            </a>
         </div>
         <div class="cartelCustom__item--bottom">
            <p>
               DESCARGAR<br>
               PROGRAMA 
            </p>
            <a href="../pdf/programas/programa-auditorio4.pdf" target="_blank" >
               <img src="./img/descargar.png" alt=""> 
            </a>
         </div>
        </div>
    </div>
 </div>
 <div class="auditorioBlue__question">
    <div class="auditorioBlue__question--item" >   
          @livewire('questions' , ['auditorio' => 4])
    </div>
 </div> 
    
   <div class="iconRotate" hidden>
     <em>Gire el teléfono</em>
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
    var myRadios = document.getElementsByName('tabs2');
    var setCheck;
    var x = 0;
    for(x = 0; x < myRadios.length; x++){
        myRadios[x].onclick = function(){
            if(setCheck != this){
                 setCheck = this;
            }else{
                this.checked = false;
                setCheck = null;
        }
        };
    }
 
 let intro = document.querySelector("#introduccion");
 let clase1 = document.querySelector("#clase1");
 let clase2 = document.querySelector("#clase2");
 let video = document.querySelector("#video");
 
 
 intro.addEventListener("click", ()=>{
 
    video.src="https://player.vimeo.com/video/139467506"
 });
 clase1.addEventListener("click", ()=>{
 
    video.src="https://player.vimeo.com/video/48185005"
 })
 clase2.addEventListener("click", ()=>{
 
    video.src="https://player.vimeo.com/video/182622739"
 })
 
 </script>