@extends('layouts.congreso')

@section('style')
<link rel="stylesheet" href="./css/pabellon.css">
<link rel="stylesheet" href="./css/pabellon-m.css" media="(min-width:768px)">
<link rel="stylesheet" href="./css/pabellon-xl.css" media="(min-width:1024px)">
<link rel="stylesheet" href="./css/pabellon-sxl.css" media="(min-width:1440px)">

@endsection
@section('content')
<section class="contenedor">
    <div class="contenedor__stands">
        <div class="a">  
            <a href="/stand-humanizando">                
                <div class="shadow-lg rounded-2xl w-48 p-4 bg-white justify-between items-center tooltipa ">
                    <div class="w-1/3">                    
                            <img src="./img/logos/humanizando.png" alt="humanizando" class="rounded-full"/>                    
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-base font-bold">Fundación humanizando</span> 
                        </p>
                    </div>
                    
                </div>
            </a>          
            {{-- <a href="/detail-dau">
                <img src="./img/stands/stand1.png" alt="">
            </a> --}}
            
        </div>
        <div class="b">
            <a href="/stand-social">                
                <div class="shadow-lg rounded-2xl w-48 p-4 bg-white justify-between items-center tooltipa ">
                    <div class="w-1/3">                    
                            <img src="./img/logos/humanizando.png" alt="humanizando" class="rounded-full"/>                    
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-base font-bold">Fundación humanizando</span> 
                        </p>
                    </div>
                    
                </div>
            </a>    
            <a href="/stand-social">                
                <div class="shadow-lg rounded-2xl w-48 p-4 bg-white justify-between items-center tooltipb  ">
                    <div class="w-1/3" >                        
                            <img src="./img/logos/social.png" alt="social like" class="rounded-full"/>                        
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                        <span class="text-2xl font-bold">Social Like</span>
                        </p>
                    </div>
                    
                </div>  
            </a>      
            
        </div>
        <div class="c">
            <a href="/stand-damassalud">
                    <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipc ">
                        <div class="w-1/3">
                            <img src="./img/logos/damas.png" alt="damas" class="rounded-full"/>
                        </div>
                        <div class="w-2/3">
                            <p class="text-gray-500  text-xl">
                            <span class="text-2xl font-bold">Damas Salud</span>
                            </p>
                        </div>                        
                    </div>
            </a>
            
        </div>
        <div class="d">
            <a href="/stand-beauty">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipd ">
                    <div class="w-1/3">
                        <img src="./img/logos/hq.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-2xl font-bold">HQ</span>
                        </p>
                    </div>                    
                </div>
            </a>            
        </div>
        <div class="e">
            <a href="/stand-guatemala">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipe ">
                    <div class="w-1/3">
                        <img src="./img/logos/guatemala.png" alt="guatemala" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-lg font-bold">Dau Guatemala</span>
                        </p>
                    </div>                
                </div>    
            </a>
        </div>
        <div class="f">
            <a href="/stand-dau">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipf ">
                    <div class="w-1/3">
                        <img src="./img/logos/dau.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-2xl font-bold">Dau</span>
                        </p>
                    </div>                
                </div>            
            </a>
        </div>
        <div class="g">
            <a href="/stand-ediciones">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipg ">
                    <div class="w-1/3">
                        <img src="./img/logos/ediciones.png" alt="ediciones" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-lg font-bold">Ediciones Dau</span>
                        </p>
                    </div>                
                </div>
            </a>
        </div>
        <div class="h">
            <a href="/stand-cundinamarca">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltiph ">
                    <div class="w-1/3">
                        <img src="./img/logos/cundinamarca.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-sm font-bold">Dau Cundinamarca</span>
                        </p>
                    </div>                
                </div>            
            </a>
        </div>
        <div class="i">
            <a href="/stand-nayarit">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipi ">
                    <div class="w-1/3">
                        <img src="./img/logos/nayarit.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-2xl font-bold">Dau Nayarit</span>
                        </p>
                    </div>                
                </div>
            </a>
            
        </div>
        <div class="j">
            <a href="/stand-queretaro">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipj ">
                    <div class="w-1/3">
                        <img src="./img/logos/queretaro.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-xl font-bold">Dau Queretaro</span>
                        </p>
                    </div>                    
                </div>
            </a>            
        </div>
        <div class="k">
            <a href="/stand-dominicana">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipk ">
                    <div class="w-1/3">
                        <img src="./img/logos/dominicana.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-base font-bold">Sociedad Dominicana de Logoterapia</span>
                        </p>
                    </div>                
                </div>            
            </a>
        </div>
        <div class="l">
            <a href="/stand-instituto">
                <div class="shadow-lg rounded-2xl w-44 p-4 bg-white justify-between items-center tooltipl ">
                    <div class="w-1/3">
                        <img src="./img/logos/sociedad.png" alt="dau" class="rounded-full"/>
                    </div>
                    <div class="w-2/3">
                        <p class="text-gray-500  text-xl">
                           <span class="text-lg font-bold">Instituto peruano Victor Franklin</span>
                        </p>
                    </div>                
                </div> 
            </a>
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