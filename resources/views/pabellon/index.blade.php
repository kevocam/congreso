@extends('layouts.congreso')

@section('style')
<link rel="stylesheet" href="./css/pabellon.css">
<link rel="stylesheet" href="./css/pabellon-m.css" media="(min-width:768px)">
<link rel="stylesheet" href="./css/pabellon-xl.css" media="(min-width:1024px)">
<link rel="stylesheet" href="./css/pabellon-sxl.css" media="(min-width:1440px)">
<link rel="stylesheet" href="./css/pabellon-xxl.css" media="(min-width:1550px)">


@endsection
@section('content')
<section class="contenedor">
    <div class="contenedor__stands">
        <div class="a">  
            <div class="cardTool tooltipa ">
                    <a class="cardTool__item"  href="/stand-humanizando">                
                        <div class=" cardTool__item--img">                    
                                <img src="./img/logos/humanizando.png" alt="humanizando" class="rounded-full"/>                    
                        </div>
                        <div class="cardTool__item--title">
                            <p class="">
                                Fundación humanizando
                            </p>
                        </div>
                     </a>          
                    
                </div>            
        </div>
        <div class="b">
            <div class="cardTool tooltipb ">                
                <a class="cardTool__item" href="/stand-social">                
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/social.png" alt="social like" class="rounded-full"/>                        
                    </div>
                    <div class="cardTool__item--title">
                        <p>
                        <span   >Social Like</span>
                        </p>
                    </div>                    
                </a>                        
            </div>            
        </div>
        <div class="c">
            <div class="cardTool tooltipc ">
                    <a class="cardTool__item" href="/stand-damassalud">
                        <div class=" cardTool__item--img">
                            <img src="./img/logos/damas.png" alt="damas" class="rounded-full"/>
                        </div>
                        <div class="cardTool__item--title">
                            <p  >
                            <span   >Damas Salud</span>
                            </p>
                        </div>                        
                    </a>
                    </div>
            
        </div>
        <div class="d">
            <div class="cardTool tooltipd ">
                <a class="cardTool__item" href="/stand-beauty">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/hq.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span   >HQ</span>
                        </p>
                    </div>                    
                </a>            
                </div>
        </div>
        <div class="e">
            <div class="cardTool tooltipe ">
                <a class="cardTool__item" href="/stand-guatemala">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/guatemala.png" alt="guatemala" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span class="text-lg font-bold">Dau Guatemala</span>
                        </p>
                    </div>                
                </a>
                </div>    
        </div>
        <div class="f">
            <div class="cardTool tooltipf ">
                <a class="cardTool__item" href="/stand-dau">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/dau.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span   >Dau</span>
                        </p>
                    </div>                
                </a>
                </div>            
        </div>
        <div class="g">
            <div class="cardTool tooltipg ">
                <a class="cardTool__item" href="/stand-ediciones">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/ediciones.png" alt="ediciones" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span class="text-lg font-bold">Ediciones Dau</span>
                        </p>
                    </div>                
                </a>
                </div>
        </div>
        <div class="h">
            <div class="cardTool tooltiph ">
                    <a class="cardTool__item" href="/stand-cundinamarca">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/cundinamarca.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span class="text-sm font-bold">Dau Cundinamarca</span>
                        </p>
                    </div>                
                </a>
                </div>            
        </div>
        <div class="i">
            <div class="cardTool tooltipi ">
                    <a class="cardTool__item" href="/stand-nayarit">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/nayarit.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span   >Dau Nayarit</span>
                        </p>
                    </div>                
                </a>
                </div>
            
        </div>
        <div class="j">
            <div class="cardTool tooltipj ">
                    <a class="cardTool__item" href="/stand-queretaro">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/queretaro.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span class="text-xl font-bold">Dau Queretaro</span>
                        </p>
                    </div>                    
                </a>            
                </div>
        </div>
        <div class="k">
            <div class="cardTool tooltipk ">
                    <a class="cardTool__item" href="/stand-dominicana">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/dominicana.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span class="text-base font-bold">Sociedad Dominicana de Logoterapia</span>
                        </p>
                    </div>                
                </a>
                </div>            
        </div>
        <div class="l">
            <div class="cardTool tooltipl ">
                    <a class="cardTool__item" href="/stand-instituto">
                    <div class=" cardTool__item--img">
                        <img src="./img/logos/sociedad.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="cardTool__item--title">
                        <p  >
                           <span class="text-lg font-bold">Instituto peruano Victor Franklin</span>
                        </p>
                    </div>                
                </a>
                </div> 
        </div>
      
    </div>

</section>



    {{-- @unless (Auth::check())
        Esta seccion es solo para personal autorizado
    @endunless
    <div class="contenedor">
        <div class="contenedor__main">
            <div class="contenedor__main--1">                
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img id="item1" alt="profil" src="./img/insignias/insignia1.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-gray-800 dark:text-white">
                            Dau Nayarit
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                            centro de lrapia y tanatología                      
                          </p>
                        
                    </div>                    
                </div>
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img id="item2" alt="profil" src="./img/insignias/insignia6.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p id="item2Text" class="text-4xl max-w-xs font-bold text-gray-800 dark:text-white">
                            Dau
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                            Centro de logoterapia                     
                          </p>
                        
                    </div>                    
                </div>
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img id="item3" alt="profil" src="./img/dauGroup3.png" class="mx-auto my-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center ">
                        <p id="item3Text" class="text-4xl font-bold text-gray-800 dark:text-white">
                            Dau Cundimarca 
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                            anatología Viktor Frankl                      
                          </p>
                        
                    </div>                    
                </div>  
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img id="item4" alt="profil" src="./img/dauGroup4.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p id="item4Text" class="text-4xl font-bold text-gray-800 dark:text-white">
                            Dau Querétaro 
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                           Socio estratégico
                        </p>
                        
                    </div>                    
                </div>                     
            </div>
            <div class="contenedor__main--2">
                <div class="detail">
                    <div class="detail__logo">
                        <img id="imgBase" src="./img/dauGroup1.png" width="175" alt="">
                    </div>
                    <div class="detail__title">
                        <h2 id="titleBase"> Dau Nayarit  </h2>
                        <em id="descBase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat vero dolores aliquam enim nesciunt nostrum accusantium voluptate sint commodi officiis nemo aliquid temporibus, deleniti ducimus at id exercitationem provident. Facilis.</em>
                    </div>
                    <div class="detail__btn mt-10">

                        <a  id="btn" href="#" type="button" class="mt-5 py-6 px-8  bg-indigo-600 btn hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg text ">
                            Ver todos los detalles
                        </a>

                    </div>

                </div>
                
            </div>
            <div class="contenedor__main--3">
                
                
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img alt="profil" src="./img/dauGroup1.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-gray-800 dark:text-white">
                            Dau Nayarit
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                            centro de lrapia y tanatología                      
                          </p>
                        
                    </div>                    
                </div>
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img alt="profil" src="./img/dauGroup2.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p  class="text-4xl max-w-xs font-bold text-gray-800 dark:text-white">
                            Sociedad dominicana
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                            centro de lrapia y tanatología                      
                          </p>
                        
                    </div>                    
                </div>
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img alt="profil" src="./img/dauGroup3.png" class="mx-auto my-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center ">
                        <p class="text-4xl font-bold text-gray-800 dark:text-white">
                            Dau Cundimarca 
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                            anatología Viktor Frankl                      
                          </p>
                        
                    </div>                    
                </div>  
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img alt="profil" src="./img/dauGroup4.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-gray-800 dark:text-white">
                            Dau Querétaro 
                        </p>
                        <p class="text-xl text-gray-600 dark:text-gray-500 font-light">
                           Socio estratégico
                        </p>
                        
                    </div>                    
                </div>                     
            </div>
        </div>
        <div class="contenedor__footer">
            <div class="contenedor__footer--menu">
               
            </div>
            <div class="contenedor__footer--chat">
                chat
            </div>
            

        </div>
    </div> --}}

    
@endsection
{{-- 
<x-congreso-layout>
    <main>
                {{ $slot }}
    </main>
</x-congreso-layout> --}}
@section('js')

<script src="./js/pabellon.js" defer></script>
@endsection