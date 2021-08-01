<x-app-layout>
    <section class="bg-gray-300 py-3">
        <div class="container">
            <form class="" action="{{route('admin.articles.approved', $article)}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger p-6">Aprovar el artículo</button>
            </form>
        </div>
        @if (session('info'))
            <div class="lg:col-span-3" x-data="{open: true}" x-show="open">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Ocurrio un error! </strong>
                    <span class="block sm:inline">{{session('info')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                      <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                  </div>
            </div>

        @endif
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
            <img class="h-full w-1/2 object-cover object-center" src="{{Storage::url($article->img->url)}}" alt="">
            <div class="flex flex-wrap m-3">
                
                <a class="w-24 btn  mr-2 bg-blue-400 hover:bg-blue-500 text-white text-center" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="w-24 btn  mr-2 bg-blue-700 hover:bg-blue-800 text-white text-center" href=""><i class="fab fa-whatsapp"></i></a>
                <a class="w-24 btn bg-blue-500 hover:bg-blue-600 text-white text-center" href=""><i class="fab fa-youtube"></i></a>

            </div>
                <hr>
            <div class="py-3">
                {!!Str::limit($article->description, 10000)!!} 
            </div>
        </div>
    </section>
</x-app-layout>