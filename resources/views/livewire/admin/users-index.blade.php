<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown='limpiar_page' wire:model='search' class="form-control w-100" placeholder="Escriba un nombre...">
        </div>
        @if($users->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead >

                    </thead>
                        <th>Id</th>
                        <th>Nmbre</th>
                        <th>Email</th>
                        <th></th>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width='10px'>
                                <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$users->links()}}
        @else
            <div class="card-body">
                <strong>No se encontraron registros para la busqueda...</strong>
            </div>
        @endif
        </div>
    </div>
</div>
