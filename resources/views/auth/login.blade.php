@extends('layouts.layout')

@section('content')

<form action="/login" method="POST">
    numero de cedula
    <input type="number" name="numero_cedula">

    contraseña
    <input type="password" name="contraseña">
    <input type="submit" value="Iniciar Sesión">
</form>

@endsection