@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/pabellon-xl.css">
@endsection
@section('content')
<section class="contenedor">
    <div class="contenedor__stands">
        <div class="a">
            
            <div class="shadow-lg rounded-2xl w-64 p-4 bg-white  justify-between items-center tooltip ">
                <div class="w-2/6">
                    <img src="./img/dauGroupCircle4.png" alt="dau" class="h-10 w-12 rounded-full"/>
                </div>
                <div class="w-3/6">
                    <p class="text-gray-500 text-xl">
                       <span class="text-2xl">Dau</span>  - Logoterapia y sentido de vida
                    </p>
                </div>
                <div class="w-1/6 text-right">
                   {{--  <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" class="text-indigo-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                        </path>
                    </svg> --}}
                </div>
            </div>
            <a href="/detail-dau">
                <img src="./img/stands/stand1.png" alt="">
            </a>
            
        </div>
        <div class="b">
            
        </div>
        <div class="c">
            
        </div>
        <div class="d">
            
        </div>
        <div class="e">
            
        </div>
        <div class="f">
            
        </div>
        <div class="g">
            
        </div>
        <div class="h">
            
        </div>
        <div class="i">
            
        </div>
        <div class="j">
            
        </div>
        <div class="k">
            
        </div>
        <div class="l">
            
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