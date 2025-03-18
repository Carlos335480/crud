@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection