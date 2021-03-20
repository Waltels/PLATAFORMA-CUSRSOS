<div>
    <x-slot name="course">
        {{$course->slug}}
      </x-slot>

      <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>

      <hr class="mt-2 mb-6">

      @foreach ($course->sections as $item)
        
        <article class="card mb-6">
          <div class="card-body bg-gray-100">
            @if ($section->id == $item->id)

            <form wire:submit.prevent="update">
              <input wire:model="section.name" class="form-control w-full" placeholder="Ingrese el nombre de la sección ">
              @error('section.name')
              <samp class="text-xs text-red-500">{{$message}}</samp>  
              @enderror
            </form>
                
            @else
              <header class="flex justify-between items-center">
                <h1 class="cursor-pointer"> <strong>Sección: </strong>{{$item->name}}</h1>
                <div>
                  <i class="fas fa-edit cursor-pointer text-blue-500" wire:click="edit({{$item}})"></i>
                  <i class="fas fa-eraser cursor-pointer text-red-500 ml-3 mr-3" wire:click="destroy({{$item}})"></i>
                </div>
              </header>  
              <div>
                @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
              </div> 
            @endif
              
          </div>
        </article>

      @endforeach

      <div x-data="{open: false}">
        <a x-on:click="open = true" class="flex items-center cursor-pointer">
          <i class="far fa-plus-square text-lg text-red-500 mr-2">
            Agregar nueva sección
          </i>
        </a>
        <article class="card" x-show="open">
          <div class="card-body bg-gray-100">
              <h1 class="text-ml font-bold">Agregar nueva sección</h1>
          </div>
          <div class="mb2 card-body">
            <input wire:model="name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full" placeholder="Escriba el nombre de la sección">
            @error('name')
              <samp class="text-xs text-red-500">{{$message}}</samp>  
              @enderror
          </div>
          <div class="flex justify-end mb-2 mr-6">
              <button class="btn btn-danger"x-on:click="open = false">Cancelar</button>
              <button class="btn btn-primary ml-3" wire:click="store">Agregar</button>
          </div>

        </article>
      </div>
</div>
