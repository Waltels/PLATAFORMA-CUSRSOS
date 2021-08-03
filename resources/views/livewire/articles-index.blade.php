<div>
    <section class="bg-cover" style="background-image: url({{asset('img/home/people2-2557399.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="w-full md:w-1/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Publicaciones de importancia SERCONED</h1>
                <p class="text-white text-lg mt-2 mb-6">Los articulos mas destacados, que te ayudarán a orientar tu capacidades como maestra y maestro</p>
        </div>
    </section>
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 m-6">
        <div>
            <div class="flex justify-center">
                <img class="w-1/3" src="{{asset('img/articles/serconed.png')}}" alt="">
            </div>
            <h1 class="text-4xl text-center"> <samp class="text-blue-800">SERC</samp><samp class="text-red-600">ONED</samp> </h1>
            <p class="text-center mb-4">Servicio de Consultoria en Educacion</p>
            
            <!-- Boton buscar-->
            @livewire('searcharticle')

            <div class="card rounded mt-5 mb-5">
                <h1 class="text-center font-bold text-xl py-1">Categorias</h1> 
                <hr>
                <ul class="py-3">
                    <li class="leaing-10 px-5 cursor-pointer hover:bg-blue-500" wire:click="resetFilterscat" >Todas las categorias</li>
                    @foreach ($carticles as $carticle)
                    <li class="leading-7 px-5 cursor-pointer hover:bg-blue-500" wire:click="$set('carticle_id',{{$carticle->id}})">{{$carticle->name}}</li>
                    @endforeach
                    
                </ul>  
            </div>
            <div class="flex content-center bg-red-700 h-20">
                <a class="mt-4 btn bg-red-700 btn-block text-white text-center h-18" href="">Visita nuestros cursos</a>
            </div>
            <div class="flex content-center bg-red-700 h-20 mt-2">
                <a class="mt-4 btn bg-red-700 btn-block text-white text-center h-18" href="">Tosda la información de nuestros eventos</a>
            </div>
        </div>    
        <div class="col-span-2">
            @foreach ($articles as $article)
            <hr class="py-2">
            <div class="mt-2 mb-8">
                <h1 class="text-2xl font-bold font-serif"><a  href="{{route('articles.show', $article)}}">{{Str::limit($article->title)}}</a> </h1>
                <h3 class="text-xl font-serif mb-2">{{Str::limit($article->subtitle, 330)}}</h3>
                <p>autor del articulo</p>
                <hr class="bg-gray-800">
                <div class="flex flex-wrap">
                    <i class="far fa-calendar-alt mt-2 mb-2"></i><p class="ml-6 mt-1 mb-2">{{Str::limit($article->created_at)}}</p>
                </div>
                <img class="h-full w-full object-cover object-center" src="{{Storage::url($article->img->url)}}" alt="">
                <div class="flex flex-wrap m-3">
                    
                    <a class="w-24 btn  mr-2 bg-blue-400 hover:bg-blue-500 text-white text-center" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="w-24 btn  mr-2 bg-blue-700 hover:bg-blue-800 text-white text-center" href=""><i class="fab fa-whatsapp"></i></a>
                    <a class="w-24 btn bg-blue-500 hover:bg-blue-600 text-white text-center" href=""><i class="fab fa-youtube"></i></a>

                </div>

                <div class="py-2">
                    {!!Str::limit($article->description, 300)!!}
                </div>
                <div>
                   <a  href="{{route('articles.show', $article)}}" class="btn btn-primary"> Leer mas</a>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
