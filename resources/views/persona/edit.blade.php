@extends('templates.plantilla')

@section('titulo','Personas Edit')
@section('contenido')
    <h1>Aqui se editara el formulario de una persona</h1>
    <form action="{{route('personas.update', $persona)}}" method="POST">
        
        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old ('nombre',$persona->nombre)}}">
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
            <input type="text" name="apellido_paterno" value="{{old('apellido_paterno',$persona->apellido_paterno)}}">
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
            <input type="text" name="apellido_materno" value="{{old('apellido_materno',$persona->apellido_materno)}}">
        </label>
        @error('apellido_materno')
        <br>
            <span>*{{$message}}</span>
        <br>
        @enderror 
        <br>
        <label>
            Fecha de Nacimiento:
            <br>
            <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento',$persona->fecha_nacimiento)}}">
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
            <input type="text" name="direccion" value="{{old('direccion',$persona->direccion)}}">
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
            <input type="text" name="usuario" value="{{old('usuario',$persona->usuario)}}">
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
            <input type="password" name="contraseña" value="{{old('contraseña',$persona->contraseña)}}">
        </label>
        @error('contraseña')
        <br>
            <span>*{{$message}}</span>
        <br>
        @enderror 
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection