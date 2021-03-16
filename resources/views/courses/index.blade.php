<x-app-layout>

    <!-- Seccion 1.- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/code.jpg')}})">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
           <div class="w-full md:w-3/4 lg:w-1/2">
               <h1 class="text-white font-bold text-4xl">Los mejores cursos de programación ¡GRATIS! y en español.</h1>
               <p class="text-white text-lg mt-2 mb-6">Si estás buscando potenciar tus conocimientos de programación, has llegado al lugar adecuado. Encuentra cursos y proyectos que te ayudarán en ese proceso</p>

               <!-- Boton buscar-->
               @livewire('search')
                
            </div>
       </div>
   </section>

   @livewire('courses-index')

</x-app-layout>