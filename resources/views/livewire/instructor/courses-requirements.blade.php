<section>
    <h1 class="text-2xl font-bold">REQUERIMIENTOS DEL CURSO</h1>
    <hr class="mt-2 mb-6">
    @foreach ($course->requirements as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-100">
                @if ($requirement->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="requirement.name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full">
                        @error('requirement.name')
                        <samp class="text-xs text-red-500">{{$message}}</samp>  
                        @enderror
                    </form>
                @else
                    <header class="flex justify-between">
                        <h1>{{$item->name}}</h1>
                        <div>
                            <i wire:click="edit({{$item}})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                            <i wire:click="destroy({{$item}})" class="fas fa-trash text-red-500 cursor-pointer ml-3"></i>
                        </div>
                    </header>
                @endif
            </div>
        </article>
    @endforeach

    <article class="card">
        <div class="card-body bg-gray-100">
            <form wire:submit.prevent="store">
                <input wire:model="name" class="py-2 px-3 border border-gray-500 focus:outline-none focus:ring-indigo-700 focus:border-indigo-700 rounded-md sm:text-sm w-full" placeholder="Agregar el nombre  deL requerimiento">
                @error('name')
                    <samp class="text-xs text-red-500">{{$message}}</samp>  
                @enderror
                <div class="flex justify-end mt-2">
                    <button class="btn btn-primary">Agregar requerimiento</button>
                </div>
            </form>
        </div>
    </article>
</section>
