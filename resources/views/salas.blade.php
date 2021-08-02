@extends('layouts.congreso')

@section('style')

<link rel="stylesheet" href="./css/salas.css">
{{-- <link rel="stylesheet" href="./css/auditorio-blue-m.css" media="(min-width:930px)">
<link rel="stylesheet" href="./css/auditorio-blue-xl.css" media="(min-width:1100px)">
 --}}

@endsection

    @section('content')    

@hasanyrole('congreso|super-admin')

    
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class=" text-7xl font-medium title-font mb-2 text-gray-900">Congreso</h1>
          <div class="h-1 w-20 bg-blue-500 rounded"></div>
        </div>
{{--         <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
 --}}      </div>
      <div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
           <a href="/auditorio" >
               <div class="cardCustom p-4  md:w-1/2 sm:mb-0 mb-6 transform motion-safe:hover:scale-110">
                 <div class="rounded-lg h-90 overflow-hidden">
                  <img alt="content" class="object-cover object-center h-full w-full" src="./img/auditorio/auditorio4/portada.png">
                </div>
                 <h2 class="text-3xl font-medium title-font text-gray-900 mt-5">Auditorio 1 - Viktor Frankl </h2>
{{--                  <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                  <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                   <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                     <path d="M5 12h14M12 5l7 7-7 7"></path>
                   </svg> 
                 </a>
               </div>
           </a>
           <a href="/auditorio2">
               <div class="cardCustom p-4 md:w-1/2 sm:mb-0 mb-6">
                 <div class=" rounded-lg overflow-hidden">
                  <img alt="content" class="object-cover object-center h-full w-full" src="./img/auditorio/auditorio3/portada.png">

                 </div>
                 <h2 class="text-3xl font-medium title-font text-gray-900 mt-5">Auditorio 2 - Eleonore Frankl</h2>
{{--                  <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                 <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                   <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                     <path d="M5 12h14M12 5l7 7-7 7"></path>
                   </svg>
                 </a>
               </div>
           </a>
          </div> 
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
           <a href="/auditorio3">

               <div class="cardCustom p-4 md:w-1/2 sm:mb-0 mb-6">
                 <div class="rounded-lg  overflow-hidden">
                   <img alt="content" class="object-cover object-center h-full w-full" src="./img/auditorio/auditorio2/portada.png">
                 </div>
                 <h2 class="text-3xl font-medium title-font text-gray-900 mt-5">Auditorio 3 - Max Scheler</h2>
{{--                  <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                 <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                   <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                     <path d="M5 12h14M12 5l7 7-7 7"></path>
                   </svg>
                 </a>
               </div>

           </a>
           <a href="/auditorio4">

               <div class="cardCustom p-4 md:w-1/2 sm:mb-0 mb-6">
                 <div class="rounded-lg  overflow-hidden">
                   <img alt="content" class="object-cover object-center h-full w-full" src="./img/auditorio/auditorio1/portada.png">
                 </div>
                 <h2 class="text-3xl font-medium title-font text-gray-900 mt-5">Auditorio 4 - Karl Jaspers</h2>
{{--                  <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                  <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                   <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                     <path d="M5 12h14M12 5l7 7-7 7"></path>
                   </svg>
                 </a>
               </div>

           </a>
          </div> 
      </div>
              
    </div>
  </section>
@else

@endhasanyrole
@hasanyrole('taller1|taller2|taller3|taller4|taller5|taller6|super-admin')
    
<section class="  text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="text-7xl font-medium title-font mb-2 text-gray-900">Talleres</h1>
          <div class="h-1 w-20 bg-blue-500 rounded"></div>
        </div>
{{--         <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
 --}}      </div>
      <div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            @hasanyrole('taller1|super-admin')
            <a href="/taller1">
                <div class="cardCustom p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="./img/salas/sala1.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Taller1</h2>
{{--                     <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                     <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                </div>
            </a>
            @endhasanyrole
            @hasanyrole('taller2|super-admin')
            <a href="/taller2">
                <div class="cardCustom p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="./img/salas/sala2.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Taller2</h2>
{{--                     <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                     <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
            
            </a>
            @endhasanyrole
            @hasanyrole('taller3|super-admin')
            <a href="/taller3">
                <div class="cardCustom p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="./img/salas/sala3.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Taller3</h2>
{{--                     <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                     <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
            </a>
            @endhasanyrole
            @hasanyrole('taller4|super-admin')
            <a href="/taller4">
                <div class="cardCustom p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="./img/salas/sala4.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Taller4</h2>
{{--                     <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                     <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>            
            </a>
            @endhasanyrole
            @hasanyrole('taller5|super-admin')
            <a href="/taller5">
                <div class="cardCustom p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="./img/salas/sala5.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Taller5</h2>
{{--                     <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                     <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
            </a>
            @endhasanyrole
            @hasanyrole('taller6|super-admin')
            <a href="/taller6">
                <div class="cardCustom p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="./img/salas/sala6.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Taller6</h2>
{{--                     <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
 --}}                     <a class="text-indigo-500 inline-flex items-center mt-3">Entrar...
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>            
            </a>
            @endhasanyrole                       
      </div>              
    </div>
  </section>

@endhasanyrole

        
    @endsection
