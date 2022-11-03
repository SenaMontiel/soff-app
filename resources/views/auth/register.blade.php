@extends('layouts.layout')

@section('content')

<form action="/registrar_usuario" method="POST">
    @csrf
    <input type="text" name="nombre">
    <input type="text" name="apellidos">
    <input type="number" name="numero_cedula">
    <select name="rol">
        <option value="seleccionar">Seleccionar</option>
        <option value="administrador">Administrador</option>
        <option value="empleado" selected>Empleado</option>
    </select>
    <input type="number" name="edad">
    <input type="password" name="contraseña">
    <input type="submit" value="Registrarse">
</form>
@endsection