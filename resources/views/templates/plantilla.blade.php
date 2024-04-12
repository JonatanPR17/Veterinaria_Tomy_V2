<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') </title>   
    <!---<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('ruta/a/tu/estilo.css') }}"-->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('templates.partials.header')
    @yield('contenido')
    @include('templates.partials.footer')
</body>
</html>