<div class="card" x-data="{open: false}">
    <div class="card-body bg-gray-100">
        <header>
            <h1 x-on:click="open = !open" class="cursor-pointer" >Recursos de la lección</h1>
        </header>
        <div x-show="open">
            <hr class="my-2">

            @if ($lesson->resource)
                <div class="flex justify-between items-center">
                    <p> <i wire:click="download" class="fas fa-download text-gray-600 mr-2 cursor-pointer"></i> {{$lesson->resource->url}}</p>
                    <i wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
                </div>
            @else          
                <form wire:submit.prevent="save">
                    <div class="flex items-center">
                        <input wire:model="file" type="file" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full flex-1">
                        <button type="submit" class="btn btn-primary text-sm ml-4">Guardar</button>
                    </div>
                    <div class="text-blue-500 font-bold mt-1" wire:loading wire:target="file">
                        Cargando...
                    </div>
                    @error('file')
                        <samp class="text-xs text-red-500">{{$message}}</samp>  
                    @enderror
                </form>
            @endif
        </div>
    </div>
</div>
