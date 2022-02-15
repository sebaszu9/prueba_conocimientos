@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf

    <h1 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar estudiante - {{ $estudiante->nombres }} {{ $estudiante->apellidos }}</h1>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Nombre del estudiante" name="nombres" value="{{ $estudiante->nombres }}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Apellidos del estudiante" name="apellidos" value="{{ $estudiante->apellidos }}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Edad del estudiante" name="edad" value="{{ $estudiante->edad }}">

    <input type="date" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Fecha de nacimiento" name="fecha_nacimiento" value="{{ $estudiante->fecha_nacimiento }}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Alergias del estudiante" name="alergias" value="{{ $estudiante->alergias }}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Medico del estudiante" name="medico" value="{{ $estudiante->medico }}">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Editar estudiante</button>
</form>

@endsection