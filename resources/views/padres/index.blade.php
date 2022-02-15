@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="overflow-hidden shadow-xl sm:rounded-lg">
    <h1 class="flex justify-center py-3">Listado de padres de familia</h1>
    <table class="bg-white table-fixed w-full">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="w-20 py-4 ...">ID </th>
                <th class="w-1/8 py-4 ...">Nombres </th>
                <th class="w-1/16 py-4 ...">Apellidos </th>
                <th class="w-1/16 py-4 ...">Edad </th>
                <th class="w-1/16 py-4 ...">Fecha de nacimiendo </th>
                <th class="w-28 py-4 ...">Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($padres as $row)
                <tr>
                    <td class="py-3 px-6">{{ $row->id }}</td>
                    <td class="p-3 text-center">{{ $row->nombres }}</td>
                    <td class="p-3 text-center">{{ $row->apellidos }}</td>
                    <td class="p-3 text-center">{{ $row->edad }}</td>
                    <td class="p-3 text-center">{{ $row->fecha_nacimiento }}</td>
                    <td class="p-3 flex justify-center">
                        <a href="{{ route('padres.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm mx-1">
                        <i class="fas fa-pen"></i></a>
                        <form action="{{ route('padres.destroy', $row->id) }}" method="POST">
                            @csrf
                            <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection