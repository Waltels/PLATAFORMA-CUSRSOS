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
            <!-- Boton buscar-->
            @livewire('searcharticle')

            <div class="bg-gray-300 rounded mt-5 mb-5">
                <h1 class="text-center font-bold text-2xl py-3">Categorias</h1> 
                <hr>
                <ul class="py-3">
                    <li class="leaing-10 px-5 cursor-pointer hover:bg-gray-500 text-blue-800 font-semibold" wire:click="resetFilterscat" >Todas las categorias</li>
                    @foreach ($carticles as $carticle)
                    <li class="leading-10 px-5 cursor-pointer hover:bg-gray-500" wire:click="$set('carticle_id',{{$carticle->id}})">{{$carticle->name}}</li>
                    @endforeach
                    
                </ul>  
            </div>
            <div class="bg-gray-400 rounded mb-5">1    
            </div>
            <div class="bg-gray-600 rounded mb-5">1    
            </div>
        </div>    
        <div class="col-span-2">
            @foreach ($articles as $article)
            <div class="mt-2 mb-8">
                <h1 class="text-2xl font-bold font-serif"><a  href="{{route('articles.show', $article)}}">{{Str::limit($article->title)}}</a> </h1>
                <h3 class="text-xl font-serif mb-2">{{Str::limit($article->subtitle, 330)}}</h3>
                <p>autor del articulo</p>
                <hr class="bg-gray-800">
                <div class="flex flex-wrap">
                    <i class="far fa-calendar-alt mt-2 mb-2"></i><p class="ml-6 mt-1 mb-2">{{Str::limit($article->created_at)}}</p>
                </div>
                <img class="h-full w-full object-cover" src="{{Storage::url($article->img->url)}}" alt="">
                <div class="flex flex-wrap m-3">
                    
                    <a class="w-24 btn  mr-2 bg-blue-400 hover:bg-blue-500 text-white text-center" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="w-24 btn  mr-2 bg-blue-700 hover:bg-blue-800 text-white text-center" href=""><i class="fab fa-whatsapp"></i></a>
                    <a class="w-24 btn bg-blue-500 hover:bg-blue-600 text-white text-center" href=""><i class="fab fa-youtube"></i></a>

                </div>


               <p class="mb-6 font-serif" >{{Str::limit($article->description, 330)}}</p>

               <a href="{{route('articles.show', $article)}}" class="btn btn-primary p-6"> 
                Leer mas
                </a>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
