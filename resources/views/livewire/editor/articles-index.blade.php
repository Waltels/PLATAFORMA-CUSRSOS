<div class="container py-8">
    <x-tablearticle-responsive>

        <div class="px-6 py-4 flex">
            <input wire:keydown='limpiar_page' wire:model='searcharticle' class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full flex-1 shadow-sm" placeholder="Ingrese el nombre de un artíclulo...">
            <a class="btn btn-danger ml-2" href="{{route('editor.articles.create')}}">Crear nuevo Arículo</a>
         </div>
         @if ($articles->count())
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  detalles del Artículo
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($articles as $article)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                @isset($article->img)
                                <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($article->img->url)}}" alt="">

                                @else
                                <img class="h-10 w-10 rounded-full object-cover object-center" src="https://www.pexels.com/photo/5965857/download/" alt="">
                                @endisset 
                            </div>
                            <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$article->title}}
                            </div>
                            <div class="text-sm text-gray-500">
                                Categoría: {{$article->carticle->name}}
                            </div>
                            </div>
                        </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @switch($article->status)
                                        @case(1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Borrador
                                            </span>
                                            @break
                                        @case(2)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Revisión
                                            </span>
                                            @break
                                        @default
                                        @case(3)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Publicado
                                            </span>
                                            @break
                                            
                                    @endswitch
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{route('editor.articles.edit', $article)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                 @endforeach
              <!-- More people... -->
            </tbody>
          </table> 
          <div class="px-6 py-4">
              {{$articles->links()}}
          </div>        
        @else
            <div class="px-6 py-4">
                No existe ningun registro que coincida...
            </div>
        @endif

    </x-tablearticle-responsive>  
</div>
