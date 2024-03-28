@extends('templates.plantilla')

@section('titulo','Persona '. $persona->nombre)
@section('contenido')
    <h1>Bienvenido al registro de la persona {{$persona->nombre}}</h1>
    <a href="{{route('personas.index')}}">Volver a la lista de personas</a>
    <br>
    <a href="{{route('personas.edit', $persona)}}">Editar Formulario</a>
    <p><strong>Apellido Paterno: </strong>{{$persona->apellido_paterno}}</p>
@endsection