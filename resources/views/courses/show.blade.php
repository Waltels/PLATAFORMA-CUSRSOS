<x-app-layout>
    <!-- Presentacion e imagen del curso-->
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full objet-cover" src="{{Storage::url($course->image->url)}}" alt="">
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"><i class="fas fa-chart-line mr-2"></i>Nivel: {{$course->level->name}}</p>
                <p class="mb-2"><i class=""></i>Categoria: {{$course->category->name}}</p>
                <p class="mb-2"><i class="fas fa-users mr-2"></i>Matriculados: {{$course->students_count}}</p>
                <p> <i class="far fa-star mr-2"></i> Calificación: {{$course->rating}}</p>
            </div>
        </div>
    </section>
    <!-- cuerpo del curso-->
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- cuerpo del curso   barra izquierda-->
        <div class="order-2 lg:col-span-2 lg:order-1">
            <!-- seccion 1 lo que aprendera del curso-->
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">lo que aprendera</h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                        <li class="text-gray-700 text-base"><i class="fas fa-check mr-2"></i>{{$goal->name}}</li>                          
                        @endforeach
                    </ul>
                </div>
            </section>
            <!-- seccion 2   tema del curso-->
            <section class="mb-12">
                <h1 class="font-bold text-3xl mb-2">Temario</h1>
                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow"
                    @if ($loop->first)
                        x-data="{open:true}"
                        @else
                        x-data="{open:false}"   
                    @endif
                    
                    >
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{$section->name}}</h1>
                         </header> 
                         <div class="bg-white px-4 py-2" x-show="open">
                             <ul class="grid grid-cols-1 gap-2">
                                 @foreach ($section->lessons as $lesson)
                                 <li class="text-gray-700 text-base"><i class="fas fa-play-circle mr-2 text-gray-600"></i>{{$lesson->name}}</li>
                                     
                                 @endforeach
                             </ul>

                         </div> 
                    </article>
                    
                @endforeach
            </section>
            <!-- seccion 3   requisitos del curso-->
            <section class="mb-8">
                <h1 class="font-bold text-3xl">Requisitos</h1>
                <ul class="list-disc list-inside">
                    @foreach ($course->requirements as $requirement)
                        <li class="text-gray-700 text.base">{{$requirement->name}}</li>
                    @endforeach
                </ul>
            </section>
            <!-- seccion 4  descripcion del curso-->
            <section>
                <h1 class="font-bold text-3xl">Descripcion</h1>
                <div class="text-gray-700 text-base">
                    {{$course->description}}
                </div>
            </section>          
        </div>
        <!-- cuerpo del curso barra derecha-->
        <div class="order-1 lg:order-2">
            <section class="card mb-3">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h12 w-12 objet-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}" alt="{{$course->teacher->name}}">
                        <div class="ml-4">
                            <h1 class="text-bold text-gray-700 text-lg">Prof. {{$course->teacher->name}}</h1>
                            <a class="text-blue-700 text-sm font-bold" href="">{{'@'.Str::slug($course->teacher->name,'')}}</a>
                        </div>
                    </div>

                        <a class="btn btn-danger btn-block mt-4">Llevar este curso</a>
               
                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach ($similares as $similar)
                    <article class="flex mb-4">
                        <img class="h-32 w-40 ovjest-cover" src="{{Storage::url($similar->image->url)}}" alt="">
                        <div class="ml-3">
                            <h1>
                                <a class="font-bold text-gray-500 mb-3" href="{{route('courses.show', $similar)}}">{{Str::limit($similar->title,40)}}</a>
                            </h1>
                            <div class="flex items-center mb2">
                                <img class="h-8 w-8 ovjet-cover rounded-full shadow-lg" src="{{$similar->teacher->profile_photo_url}}" alt="">
                                <p class="text-gray-700 text-sm ml-2">{{$similar->teacher->name}}</p>
                            </div>
                            <p class="text-sm"><i class="far fa-star mr-2 text-yellow-400"></i>{{$similar->rating}}</p>

                        </div>
                    </article>
                    
                @endforeach
            </aside>
        </div>
    </div>
</x-app-layout>