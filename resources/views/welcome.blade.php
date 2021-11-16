<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="container mx-auto">
    <x-alert color="green">
        <x-slot name="title">
            Titulo 1
       </x-slot>
    Este es un mensaje de prueba para la alerta de color verde
    </x-alert>

    <x-alert color="orange">
        <x-slot name="title">
            Titulo 2
       </x-slot>
    Este es un mensaje de prueba para la alerta de color Naranja
    </x-alert>
</body>

</html>
