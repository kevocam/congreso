@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/salas.css">
{{-- <link rel="stylesheet" href="./css/auditorio-blue-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/auditorio-blue-xl.css" media="(min-width:1100px)">
 --}}

@endsection

    @section('content')    

    
        <div class="contenedor">  
                     
            <div class="card overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="/auditorio" class="w-full block h-full">
                    <img alt="blog photo" src="./img/auditorio/blue/fondo.jpg" class="max-h-40 w-full object-cover"/>
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <p class="text-indigo-500 text-md font-medium">
                            Auditorio 1
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                            --
                        </p>
                        <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed at blanditiis labore vel eum nam quo laborum. 
                        </p>
                        <div class="flex items-center mt-4">
                            {{-- <a href="#" class="block relative">
                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 Agosto 2021 - 15:00 hrs
                                </p> 
                            </div>

                            --}}
                            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Ingresar
                            </button>

                        </div>
                    </div>
                </a>                
            </div>
            <div class="card overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="/auditorio2" class="w-full block h-full">
                    <img alt="blog photo" src="./img/auditorio/uno/fondo.jpg" class="max-h-40 w-full object-cover"/>
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <p class="text-indigo-500 text-md font-medium">
                            Auditorio 2
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                            --
                        </p>
                        <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed at blanditiis labore vel eum nam quo laborum. 
                        </p>
                        <div class="flex items-center mt-4">
                            {{-- <a href="#" class="block relative">
                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 Agosto 2021 - 15:00 hrs
                                </p> 
                            </div>

                            --}}
                            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Ingresar
                            </button>

                        </div>
                    </div>
                </a>                
            </div>
            <div class="card overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="/auditorio3" class="w-full block h-full">
                    <img alt="blog photo" src="./img/auditorio/tres/fondo.jpg" class="max-h-40 w-full object-cover"/>
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <p class="text-indigo-500 text-md font-medium">
                            Auditorio 3
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                            --
                        </p>
                        <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed at blanditiis labore vel eum nam quo laborum. 
                        </p>
                        <div class="flex items-center mt-4">
                            {{-- <a href="#" class="block relative">
                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 Agosto 2021 - 15:00 hrs
                                </p> 
                            </div>

                            --}}
                            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Ingresar
                            </button>

                        </div>
                    </div>
                </a>                
            </div>
            <div class="card overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="/auditorio4" class="w-full block h-full">
                    <img alt="blog photo" src="./img/auditorio/cuatro/fondo.jpg" class="max-h-40 w-full object-cover"/>
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <p class="text-indigo-500 text-md font-medium">
                            Auditorio 4
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                            --
                        </p>
                        <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed at blanditiis labore vel eum nam quo laborum. 
                        </p>
                        <div class="flex items-center mt-4">
                            {{-- <a href="#" class="block relative">
                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 Agosto 2021 - 15:00 hrs
                                </p> 
                            </div>

                            --}}
                            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Ingresar
                            </button>

                        </div>
                    </div>
                </a>                
            </div>
            <div class="card overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="#" class="w-full block h-full">
                    <img alt="blog photo" src="./img/auditorio/blue/fondo.jpg" class="max-h-40 w-full object-cover"/>
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <p class="text-indigo-500 text-md font-medium">
                            Auditorio 1
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                            --
                        </p>
                        <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed at blanditiis labore vel eum nam quo laborum. 
                        </p>
                        <div class="flex items-center mt-4">
                            {{-- <a href="#" class="block relative">
                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 Agosto 2021 - 15:00 hrs
                                </p> 
                            </div>

                            --}}
                            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Ingresar
                            </button>

                        </div>
                    </div>
                </a>                
            </div>
            <div class="card overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="#" class="w-full block h-full">
                    <img alt="blog photo" src="./img/auditorio/blue/fondo.jpg" class="max-h-40 w-full object-cover"/>
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <p class="text-indigo-500 text-md font-medium">
                            Auditorio 1
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                            --
                        </p>
                        <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed at blanditiis labore vel eum nam quo laborum. 
                        </p>
                        <div class="flex items-center mt-4">
                            {{-- <a href="#" class="block relative">
                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 Agosto 2021 - 15:00 hrs
                                </p> 
                            </div>

                            --}}
                            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Ingresar
                            </button>

                        </div>
                    </div>
                </a>                
            </div>
            
           
            
            
        </div>    
    @endsection
