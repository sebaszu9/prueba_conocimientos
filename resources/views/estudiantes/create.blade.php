@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{ route('estudiantes.store') }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf

    <h1 class="text-2x1 text-center py-4 mb-4 font-semibold">Ingresar estudiantes</h1>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Nombre del estudiante" name="nombres">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Apellidos del estudiante" name="apellidos">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Edad del estudiante" name="edad">

    <input type="date" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Fecha de nacimiento" name="fecha_nacimiento">

    <select id="padres" name="padres" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900">
        <option>------Seleccionar------</option>
        @foreach($padres as $value)
        <option value="{{ $value->id }}">{{ $value->nombres }} {{ $value->apellidos }}</option>
        @endforeach
    </select>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Alergias del estudiante" name="alergias">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Medico del estudiante" name="medico">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Guardar estudiante</button>
</form>

@endsection