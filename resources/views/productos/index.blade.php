@extends('layouts.app')

@section('content')
<h1>Productos</h1>
<a href="{{ route('productos.create') }}">Crear Producto</a>
<a href="{{ route('productos.stock-alto') }}">Stock Alto</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoría</th>
    </tr>
    @foreach ($productos as $producto)
    <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->stock }}</td>
        <td>{{ $producto->categoria }}</td>
    </tr>
    @endforeach
</table>
@endsection
