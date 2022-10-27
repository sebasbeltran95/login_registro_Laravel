@extends('layout.plantilla')

@section('title', 'Register')

@section('content')
    <form class="box" action="{{route('register.store')}}" method="post">
        @csrf
        <h1>Register</h1>
        <input type="text" id="email" name="email" placeholder="Correo Electronico">
        <input type="text" id="nombre" name="nombre" placeholder="Nombres">
        <input type="text" id="apellido" name="apellido" placeholder="Apellidos">
        <input type="password" id="password" name="password" placeholder="Contraseña">
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña">
        {{--  <input type="submit" name="" value="">  --}}
        <button type="submit" class="boton">Registrar</button>
    </form>
@endsection