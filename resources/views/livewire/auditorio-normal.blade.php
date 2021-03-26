<div class="auditorioContainer">
    <div class="auditorio">
      <div class="auditorio__cartelLeft slide-in-left ">
         <div class="auditorio__cartelLeft--item">

         </div>
      </div>
        <div class="auditorio__pantalla swing-in-top-bck   ">           
           <div class="auditorio__pantalla--item">
            <iframe id="video" src="https://player.vimeo.com/video/139467506" frameborder="10" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

            

           </div>              
        </div>
        <div class="auditorio__cartelRight slide-in-right">
         <div class="auditorio__cartelRight--item">

         </div>
      </div>
    </div>
    <div class="contenido">        
         <div class="w-full md:w-4/5 mx-auto p-8">
        <h2 class=" text-2xl  mb-4 text-gray-800">Contenido de la conferencia</h2>      
            <p>13 secciones - 141 clases - 11 h 32m de duración total</p>
            <div class="shadow-md">
               <div id="introduccion" class="tab w-full overflow-hidden border-t">
                  <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                  <label class="block p-5 leading-normal cursor-pointer flex " for="tab-single-one">
                    <div class="titleText">
                        <span>
                        Introduction
                        </span>
                        <span>4 clases - 12 min</span>                        
                    </div>
                  </label>
                  
                  <div class="tab-content overflow-hidden border-l bg-gray-100 cajaText">
                     <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                  </div>
               </div>
               <div id="clase1" class="tab w-full overflow-hidden border-t">
                  <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                  <label class="block p-5 leading-normal cursor-pointer flex" for="tab-single-two">
                    <div class="titleText">
                        <span>
                        Register/Login Page - Front end
                        </span>
                        <span>10 clases - 59 min</span>                        
                    </div>                 
                  
                  </label>
                  <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal cajaText">
                     <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                  </div>
               </div>
               <div id="clase2" class="tab w-full overflow-hidden border-t">
                  <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                  <label class="block p-5 leading-normal cursor-pointer flex" for="tab-single-three">
                  
                        <div class="titleText">
                                <span>
                            Creating the video preview
                                </span>
                                <span>17 clases -1h 19 min</span>                        
                            </div> 
                  
                  </label>
                  <div class="tab-content overflow-hidden border-l-2 bg-gray-100 cajaText">
                     <p class="p-5">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p>
                  </div>
               </div>
            </div>
         </div>
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
