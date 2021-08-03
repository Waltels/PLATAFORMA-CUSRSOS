<x-app-layout :article="$article">
    <div class="container py-8 grid grid-cols-5 gap-6">
        <aside>
            <h1 class="font-bold text-lg mb-4">Edición del Artículo</h1>
            <ul class="py-4">
                <li class="leading-7 mb-1 border-l-4  @routeIs('editor.articles.edit', $article) border-indigo-400 @else border-transparent @endif pl-2"">
                    <a href="{{route('editor.articles.edit', $article)}}">Información del Artìculo</a>
                </li>
                @if ($article->obsarticle)
                    <li class="leading-7 mb-1 border-l-4 @routeIs('editor.articles.obsarticle', $article) border-indigo-400 @else border-transparent @endif pl-2">
                        <a href="{{route('editor.articles.obsarticle', $article)}}">Observaciones del Artículo</a>
                    </li>
                @endif
            </ul>
            @switch($article->status)
            @case(1)
                <form action="{{route('editor.articles.status', $article)}}" method="POST">
                    @csrf
                    <button class="btn btn-danger" type="submit">Solicitar revisión</button>
                </form>
                @break
            @case(2)
                <div class="card text-red-300">
                    <div class="card-body">
                        <p class="text-blue-800">Este curso se encuentra en etapa de revisión.</p>
                    </div>
                </div>
                @break

            @case(3)
                <div class="card text-green-300">
                    <div class="card-body">
                        <p class="text-blue-800">Este curso se encuentra publicado.</p>
                    </div>
                </div>
                @break
            @default
                
            @endswitch
        </aside>
        <div class="col-span-4 card text-gray-600">
            <div class="card-body">
                <h1 class="text-2xl font-bold">OBSERVACIONES DEL ARTÍCULO</h1>
                <hr class="mt-2 mb-6">
                <div class="text-gray-600 px-8">
                    {!!$article->obsarticle->body!!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>