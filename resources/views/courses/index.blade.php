<x-app-layout>

    <!-- Seccion 1.- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/code1.jpg')}})">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
           <div class="w-full md:w-3/4 lg:w-1/2">
               <h1 class="font-serif text-white font-bold text-3xl">Los mejores cursos de educación ¡GRATIS! solo en SERCONED.</h1>
               <p class="text-white text-lg mt-2 mb-6">Si estás buscando potenciar tus conocimientos, has llegado al lugar adecuado. Encuentra cursos y proyectos que te ayudarán en los procesos de enseñanza.</p>

               <!-- Boton buscar-->
               @livewire('search')
                
            </div>
       </div>
   </section>

   @livewire('courses-index')

</x-app-layout>