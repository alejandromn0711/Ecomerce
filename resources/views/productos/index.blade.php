@extends('layouts.app')
@section('title')
@section('content')
<h1 style="margin: 20px;">Todos Los Productos</h1>

<ul class="list-group">
    @foreach ($productos as $producto)
    <li class="list-group-item active" aria-current="true">{{$producto->nombre}}</li>
    <li class="list-group-item">{{$producto->descripcion}}</li>
    <li class="list-group-item">{{$producto->marca}}</li>
    <li class="list-group-item">{{$producto->categoria}}</li>
    <li class="list-group-item">{{$producto->precio}}</li><br>
    @endforeach
</ul>
<a href="http://localhost/ecomerce/public/productos?page=1">1</a>
<a href="http://localhost/ecomerce/public/productos?page=2">2</a>
@endsection