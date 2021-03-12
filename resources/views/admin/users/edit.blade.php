@extends('adminlte::page')

@section('title', 'SERCONED')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <h5>Nombre</h5>
            <P class="form-control">{{$user->name}}</P>
            <h5>Lista de Roles</h5>

            {!! Form::model($user, ['route'=>['admin.users.update',$user], 'method'=>'put']) !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class'=> 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>            
            @endforeach
            {!! Form::submit('Asignar Rol', ['class'=> 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop