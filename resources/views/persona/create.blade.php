@extends('templates.plantilla')

@section('titulo','Personas Crear')
@section('contenido')
    <h1>Aqui creara el formulario para crear un registro de persona nuevo</h1>
    <form action="{{route('personas.store')}}" method="POST">
        
        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror          
        <br>
        <label>
            Apeliido Paterno:
            <br>
            <input type="text" name="apellido_paterno" value="{{old('apellido_paterno')}}">
        </label>
        @error('apellido_paterno')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror 
        <br>
        <label>
            Apeliido Materno:
            <br>
            <input type="text" name="apellido_materno" value="{{old('apellido_materno')}}">
        </label>
        @error('apellido_materno')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror 
        <br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror
        <label>
        <br>
            Fecha de Nacimiento:
            <br>
            <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}">
        </label>
        @error('fecha_nacimiento')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror 
        <br>
        <label>
            Direccion:
            <br>
            <input type="text" name="direccion" value="{{old('direccion')}}">
        </label>
        @error('direccion')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror 
        <br>
        <label>
            Usuario:
            <br>
            <input type="text" name="usuario" value="{{old('usuario')}}">
        </label>
        @error('usuario')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror 
        <br>
        <label>
            Contraseña:
            <br>
            <input type="password" name="contraseña"">
        </label>
        @error('contraseña')
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror 
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection