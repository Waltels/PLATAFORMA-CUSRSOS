<div>
    @foreach ($section->lessons as $item)
    <article class="card mt-4" x-data="{open: false}">
        <div class="card-body">

            @if ($lesson->id == $item->id)
                <form wire:submit.prevent="update">
                    <div class="flex items-center">
                        <label class="w-32">Nombre: </label>
                        <input wire:model="lesson.name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                    </div>
                    @error('lesson.name')
                    <samp class="text-xs text-red-500">{{$message}}</samp>  
                    @enderror
                
                    <div class="flex items-center mt-2">
                        <label class="w-32">Plataforma</label>
                        <select wire:model="lesson.platform_id" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                            @foreach ($platforms as $platform)
                                <option value="{{$platform->id}}">{{$platform->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div>
                        <div class="flex items-center mt-2">
                            <label class="w-32">URL: </label>
                            <input wire:model="lesson.url" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                        </div>
                        @error('lesson.url')
                        <samp class="text-xs text-red-500">{{$message}}</samp>  
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="text-sm btn btn-danger" wire:click="cancel">Cancelar</button>
                            <button type="submit" class="text-sm btn btn-primary ml-3" >Actualizar</button>
                        </div>
                    </div>
                </form>
            @else
                <header>
                    <h1 x-on:click="open = !open" class="cursor-pointer" ><i class="far fa-play-circle text-blue-500 mr-2"></i>Leccion: {{$item->name}}</h1>
                </header>
                <div x-show="open">
                    <hr class="my-2">
                    <p class="text-sm">Paltaforma: {{$item->platform->name}}</p>
                    <p class="text-sm">Enlace: <a class="text-blue-600" href="{{$item->url}}" target="_blank">{{$item->url}}</a></p>
                    <div class="mt-2">
                        <button class="btn btn-primary text-sm" wire:click="edit({{$item}})">Editar</button>
                        <button class="btn btn-danger text-sm" wire:click="destroy({{$item}})">Eliminar</button>
                    </div>
                    <div class="mb-4">
                        @livewire('instructor.lesson-descrption', ['lesson' => $item], key('lesson-descrption' . $item->id))
                    </div>
                    <div>
                        @livewire('instructor.lesson-resources', ['lesson' => $item], key('lesson-resources' . $item->id))
                    </div>
                </div>
            @endif
        </div>
    </article>    
    @endforeach

    <div class="mt-2" x-data="{open: false}">
        <a x-on:click="open = true" class="flex items-center cursor-pointer mb-2">
          <i class="far fa-plus-square text-lg text-red-500 mr-2">
            Agregar nueva lecciòn
          </i>
        </a>
        <article class="card" x-show="open">
          <div class="card-body">
              <h1 class="text-ml font-bold">Agregar nueva lección</h1>
          </div>
          <div class="card-body mb4">
            <div>
                <div class="flex items-center">
                    <label class="w-32">Nombre: </label>
                    <input wire:model="name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                </div>
                @error('name')
                <samp class="text-xs text-red-500">{{$message}}</samp>  
                @enderror
            </div>
            <div class="flex items-center mt-2">
                <label class="w-32">Plataforma</label>
                <select wire:model="platform_id" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                    @foreach ($platforms as $platform)
                        <option value="{{$platform->id}}">{{$platform->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('platform_id')
                <samp class="text-xs text-red-500">{{$message}}</samp>  
                @enderror
            <div>
                <div class="flex items-center mt-2">
                    <label class="w-32">URL: </label>
                    <input wire:model="url" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                </div>
                @error('url')
                <samp class="text-xs text-red-500">{{$message}}</samp>  
                @enderror
          </div>
          <div class="flex justify-end mt-3">
              <button class="btn btn-danger"x-on:click="open = false">Cancelar</button>
              <button class="btn btn-primary ml-3" wire:click="store">Agregar</button>
          </div>

        </article>
      </div>
</div>
