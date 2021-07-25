<div>
    <div class="bg-red-600 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="focus:outline-none bg-white shadow h-10 px-4 rounded-lg text-gray-700 mr-4" wire:click = "resetFilters">
                <i class="fas fa-archway text-xs mr-2"></i> Todos los cursos
            </button>

            <!-- Dropdown categorias-->
            <div class="relative mr-4" x-data="{open:false}">
                <button class="px-4 text-gray-700 block h-10 rounded-lg overflow-hidden focus:outline-none bg-white shadow"x-on:click="open=true">
                    <i class="fas fa-tags text-xs mr-2"></i>Categoria <i class="fas fa-angle-down  ml-3"></i>
                </button>
                <!-- cuerpo categorias-->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl"x-show="open" x-on:click.away = "open=false">   
                    @foreach ($categories as $category)
                    <a  class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('category_id',{{$category->id}})" x-on:click ="open = false">{{$category->name}}</a>
                    @endforeach 
                </div>
            </div>
            <!-- Dropdown niveles-->
            <div class="relative mr-4" x-data="{open:false}">
                <button class="px-4 text-gray-700 block h-10 rounded-lg overflow-hidden focus:outline-none bg-white shadow"x-on:click="open=true">
                    <i class="fas fa-tags text-xs mr-2"></i>Niveles<i class="fas fa-angle-down  ml-3"></i>
                </button>
                <!-- Cuerpo niveles -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl"x-show="open" x-on:click.away = "open=false">   
                    @foreach ($levels as $level)
                    <a  class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id',{{$level->id}})" x-on:click ="open = false">{{$level->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Seccion de cursos-->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)

        <x-course-card :course="$course"/>
            
        @endforeach

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">{{$courses->links()}}</div>
    

</div>
