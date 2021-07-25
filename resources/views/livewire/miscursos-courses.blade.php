<div>
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/azul.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="w-full">
                <h1 class="text-center text-white text-4xl">Empecemos a aprender, {{ Auth::user()->name }}</h1>
             </div>
        </div>
    </section>
    <section class="my-20">

        <p class="text-center text-gray-500 text-xl mt-6 mb-6">Mi aprendizaje con SERCONED</p>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($users->courses as $course)  
                    <article class="card flex flex-col">
                        <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                        <div class="card-body flex-1 flex flex-col">
                            <h1 class="card-title">{{Str::limit($course->title, 40)}}</h1>
                            <p class="text-gray-500 text-sm mb-2 mt-auto">Prof. {{$course->teacher->name}} </p>
                            <div class="flex">
                                <ul class="flex text-sm">
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 1? 'yellow':'grey'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 2? 'yellow':'grey'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 3? 'yellow':'grey'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 4? 'yellow':'grey'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 5? 'yellow':'grey'}}-400"></i>
                                    </li>
                                </ul>
                                
                            </div>
        
                            {{-- PRECIO DE CURSO --}}
                            
        
                            <a href="{{route('courses.show', $course)}}" class="btn btn-primary btn-block mt-3"> 
                                Ingresa a tu curso
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
    </section>

</div>