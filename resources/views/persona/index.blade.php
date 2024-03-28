@extends('templates.plantilla')

@section('titulo','Registro')

@section('contenido')
    <h1>Bienvenido a la pagina principal de las personas</h1>
    <a href={{route('personas.create')}}>Crear Persona</a>
    <ul>
        @foreach ($personas as $persona)
            <li>
                <a href="{{route('personas.show',$persona->id)}}">{{$persona->nombre}}</a>
            </li>       
        @endforeach
    </ul>

    {{$personas->links()}}
@endsection