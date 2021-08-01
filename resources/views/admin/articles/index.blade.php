@extends('adminlte::page')

@section('title', 'SERCONED')

@section('content_header')
    <h1>Articulos pendientes de aprobación</h1>
@stop
@section('content')

@if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
@endif
<div class="card">
    <div class="car-body">
        <table class="table table-striped">
            <head>
                <tr>
                    <th>Id</th>
                    <th>Título del Artículo</th>
                    <th>Categoria</th>
                    <th></th>
                </tr>
            </head>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->carticle->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.articles.show', $article)}}">Revisar</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$articles->links('vendor.pagination.bootstrap-4')}}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop