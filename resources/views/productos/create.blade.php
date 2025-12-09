@extends('layouts.app')

@section('content')
<h1>Crear Producto</h1>
<form method="POST" action="{{ route('productos.store') }}">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Precio: <input type="text" name="precio"><br>
    Stock: <input type="number" name="stock"><br>
    Categoría: <input type="text" name="categoria"><br>
    <button type="submit">Crear</button>
</form>
@endsection
