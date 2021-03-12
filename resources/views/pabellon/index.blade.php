@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/pabellon-xl.css">
@endsection
@section('content')

    @unless (Auth::check())
        Esta seccion es solo para personal autorizado
    @endunless
    <div class="contenedor">
        <div class="contenedor__main">
            <div class="contenedor__main--1">
                
                
                <div class="card-item p-4">
                    <div class="text-center mb-4 opacity-90">
                        <a href="#" class="block relative">
                            <img id="item1" alt="profil" src="./img/dauGroup1.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
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
                            <img id="item2" alt="profil" src="./img/dauGroup2.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                        </a>
                    </div>
                    <div class="text-center">
                        <p id="item2Text" class="text-4xl max-w-xs font-bold text-gray-800 dark:text-white">
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

                        <a  href="/detail" type="button" class="mt-5 py-6 px-8  bg-indigo-600 btn hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg text ">
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
                <x-menu>
               
                </x-menu>
            </div>
            <div class="contenedor__footer--chat">
                chat
            </div>
            

        </div>
    </div>

    
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