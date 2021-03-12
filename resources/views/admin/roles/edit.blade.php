@extends('adminlte::page')

@section('title', 'SERCONED')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')

@if (session('info'))
        <div class="alert alert-warning" role="alert">
            <strong>Éxtito!</strong> {{session('info')}}
        </div>
        
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method'=>'put']) !!}

        @include('admin.roles.partials.form')

        {!! Form::submit('Actualizar Rol', ['class'=> 'btn btn-primary mt-2']) !!}

        <a  href="{{route('admin.roles.index')}}" type="button" class="btn btn-success ml-2 mt-2">Regresar a Roles</a>


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