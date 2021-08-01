<x-app-layout>
    <section class="bg-gray-300 py-3">
        <div class="container">
            <a href="{{route('articles.index', $article)}}" class="btn btn-primary p-6">Retornar</a>
        </div>
    </section>
    <section class="container py-8">
        <div class="mt-2 mb-8">
            <h1 class="text-4xl  font-serif">{{Str::limit($article->title)}}</h1>
            <h3 class="text-xl font-serif mb-2">{{Str::limit($article->subtitle, 330)}}</h3>
            <p class="py-3">autor del articulo</p>
            <hr class="bg-gray-800">
            <div class="flex flex-wrap">
                <i class="far fa-calendar-alt mt-2 mb-2"></i><p class="ml-6 mt-1 mb-2">{{Str::limit($article->created_at)}}</p>
            </div>
            <img class="h-40 w-full object-cover" src="{{Storage::url($article->img->url)}}" alt="">
            <div class="flex flex-wrap m-3">
                
                <a class="w-24 btn  mr-2 bg-blue-400 hover:bg-blue-500 text-white text-center" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="w-24 btn  mr-2 bg-blue-700 hover:bg-blue-800 text-white text-center" href=""><i class="fab fa-whatsapp"></i></a>
                <a class="w-24 btn bg-blue-500 hover:bg-blue-600 text-white text-center" href=""><i class="fab fa-youtube"></i></a>

            </div>
                <hr>
            <textarea rows="4" cols="20" class="form-control w-full" >{{Str::limit($article->description, 5330)}}</textarea>   
        </div>
    </section>
</x-app-layout>