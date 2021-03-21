<div>
    <article class="card mt-3" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open = !open" class="cursor-pointer">Descripcion de la lección</h1>
            </header>
            <div x-show="open">
                <hr class="my2">
                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full"></textarea>
                        @error('description.name')
                        <samp class="text-xs text-red-500">{{$message}}</samp>  
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-danger text-sm" type="button">Eliminar</button>
                            <button class="btn btn-primary text-sm ml-2" type="submit">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model="name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full" placeholder="Agregue una descripción de la lección"></textarea>
                        @error('name')
                        <samp class="text-xs text-red-500">{{$message}}</samp>  
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-primary text-sm ml-2" type="submit">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
