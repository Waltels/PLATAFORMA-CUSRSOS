<x-app-layout>
    <!-- Seccion 1.- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/home/people2-2557399.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Capacitate en educacón con SERCONED</h1>
                <p class="text-white text-lg mt-2 mb-6">En SERCONED  encontrarás cursos, manuales y artículos que te ayudarán a deasrrollar tu capacidades como maestra y maestro</p>
      
                <!-- Boton buscar-->
                @livewire('search')
        </div>
    </section>
    <!-- Seccion 2.- Contenido -->
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-9">
            <article>
                <figure class="mb-3">
                    <img class="rounded-xl h36 w-full object-cover" src="{{asset('img/home/coursos.jpg')}}" alt="" style="height: 160px">
                </figure>
                <head class="mt-5">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </head>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio maiores amet repellat beatae ipsa minus rerum.</p>
            </article>
            <article>
                <figure class="mb-3">
                    <img class="rounded-xl h36 w-full object-cover" src="{{asset('img/home/22.jpg')}}" alt="" style="height: 160px">
                </figure>
                <head class="mt-5">
                    <h1 class="text-center text-xl text-gray-700">Asesoramiento</h1>
                </head>
                <p class="text-sm text-gray-500">Artículos de educación en planificacion, concresion y evaluacion de los procesos curriculares, para potenciar tu actualizacion y profesionalización</p>
            </article>
            <article>
                <figure class="mb-3">
                    <img class="rounded-xl h36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt="" style="height: 160px">
                </figure>
                <head class="mt-5">
                    <h1 class="text-center text-xl text-gray-700">Nuestro Blog</h1>
                </head>
                <p class="text-sm text-gray-500">Artículos de educación en planificacion, concresion y evaluacion de los procesos curriculares, para potenciar tu actualizacion y profesionalización.</p>

            </article>
            <article>
                <figure class="mb-3">
                    <img class="rounded-xl h36 w-full object-cover" src="{{asset('img/home/eventos.jpg')}}" alt="" style="height: 160px">
                </figure>
                <head class="mt-5">
                    <h1 class="text-center text-xl text-gray-700">Eventos</h1>
                </head>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio maiores amet repellat beatae ipsa minus rerum.</p>

            </article>
        </div>

    </section>
        <!-- Seccion 3.- que curso llevar -->
    <section class="mt-24 bg-gray-700 py-12">

        <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
        <p class="text-center text-white mt-2">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
        <div class="flex justify-center mt-6">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                Catálogo de cursos
            </a>
        </div>


    </section>
    <!-- Seccion 4.- Ultimos cursos -->
    <section class="my-24">
        <h1 class="text-center text-3xl  ">ÚLTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir subiendo cursos</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)

            <x-course-card :course="$course"/>
                
            @endforeach

        </div>
    </section>

    <!-- Seccion 5.- Footer -->
    <section class="mt-24 bg-gray-900 py-12">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-6 gap-y-9">
            <article>
                <figure class="mb-3">
                    <center>
                   <img width="90px" class="rounded-xl h36  object-cover" src="{{asset('img/home/logos.png')}}" alt="">
                    </center>
                </figure>
                <head >
                    <h1 class="text-center text-xl text-red-500"> <strong>SERC</strong><strong class="text-white">ONED</strong></h1>
                    
                </head>
                <p class="text-center mt-2 text-blue-300"> <strong>Servicio de consultoría en Educación</strong></p>
                <p class="text-center text-sm text-gray-200">Una Institución dedicada a la capacitación y actualización docente en el ámbito de planificación, desarrollo curricular y evaluación de los procesos educativos</p>
            </article>
            <!-- Seccion de contactos -->
            <article>
                <br>
                <figure class="mb-3 px-6 max-w-7xl">
                    <div class=" flex grid-cols-2">
                        <div>
                            <i class="fas fa-home text-blue-300 text-xl mt-2"></i>
                        </div>
                        <div class="px-12 mt-2">
                            <p class="text-sm  text-green-200">C. Sgto. Nuñes y Sucre S/N Caracollo-Oruro-Bolivia</p>
                        </div>   
                    </div>      
                </figure>

                <figure class="mb-3 px-6 max-w-7xl">
                    <div class=" flex grid-cols-2">
                        <div>
                            <i class="fas fa-phone text-blue-300 text-xl mt-2"></i>
                        </div>
                        <div class="px-12 mt-2">
                            <p class="text-sm  text-green-200">69590211 - 72497215</p>
                        </div>   
                    </div>      
                </figure>

                <figure class="mb-3 px-6 max-w-7xl">
                    <div class=" flex grid-cols-2">
                        <div>
                            <i class="fas fa-user text-blue-300 text-xl mt-2"></i>
                        </div>
                        <div class="px-12 mt-2">
                            <p class="text-sm  text-green-200">www.seconed.com</p>
                        </div>   
                    </div>      
                </figure>
                <figure class="mb-3 px-6 max-w-7xl">
                    <div class=" flex grid-cols-2">
                        <div>
                            <i class="fas fa-users text-blue-300 text-xl mt-2"></i>
                        </div>
                        <div class="px-12 mt-2">
                            <p class="text-sm  text-green-200">waltels2019@gmail.com</p>
                        </div>   
                    </div>      
                </figure>
                
            </article>
            <article>
                <figure class="mb-3">
                    
                </figure>
                <head class="mt-5">
                    <h1 class="text-center text-xl text-gray-200">Cursos y listas</h1>
                </head>
                <p class="text-sm text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio maiores amet repellat beatae ipsa minus rerum.</p>

            </article>
        </div>
        <hr class="mt-3 mb-3">
        <p class="text-center ml-9 text-sm text-white mt-2">Lic. Walter Laura Soto 2021  |   Los derechos de autor de los componentes pertenecen a sus autores |   <span class="text-gray-400">SERCONED Consultores en educación</span>       <a class="text-green-500" href="www.sercoded.com">www.sercoded.com</a></p>


    </section>


</x-app-layout>

