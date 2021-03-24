<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">

        <h1 class="text-gray-500 text-3xl font-bold">Detalle del pedido</h1>
        <div class="card mt-4 text-gray-500">
            <div class="card-body">
                <h1 class="text-2xl">Descricipción de curso:</h1>
                <article class="flex items-center">
                    <img class="h-12 w-12 object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                    <h1 class="text-lg ml-2 ">{{$course->title}}</h1>
                    <p class="text-xl font-bold  ml-auto"> Costo del curso Bs. {{$course->price->value}}</p>
                </article>

                <div class="flex justify-end mt-2 mb-4">
                    <a class="btn btn-primary" href="">Comprar este curso</a>
                </div>
                <hr>
                <p class="text-sm mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consequatur quas dolore necessitatibus, quos inventore, enim, sit beatae voluptates est quisquam itaque suscipit facilis! Ea omnis laboriosam eum. Dolorem, ab! <a class="text-red-500 font-bold" href="">Terminos y condiciones</a> </p>
            </div>
        </div>
    </div>
</x-app-layout>