<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/custom-dashboard.css') }}">
    <body style="background-color: #f3f4f6;">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Contenedor con columnas de 3 en pantallas grandes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($matriz as $pais)
                    <div class="custom-card p-6 rounded-lg flex flex-col items-center">
                        <h3 class="font-semibold text-lg">{{ $pais['nombre'] }}</h3>
                        <img src="{{ asset('banderas/' . $pais['bandera']) }}" alt="Bandera de {{ $pais['nombre'] }}" class="custom-image mt-4">
                        <p class="mt-4 text-center">{{ $pais['descripcion'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
