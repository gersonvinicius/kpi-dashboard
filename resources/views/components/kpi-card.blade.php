@props(['titulo', 'valor', 'variacao'])

@php
    $positivo = $variacao >= 0;
    $icone = $positivo ? '↑' : '↓';
    $cor = $positivo ? 'text-green-600' : 'text-red-600';
@endphp

<div class="bg-white shadow rounded-xl p-5 w-full sm:w-1/2 lg:w-1/4 transition hover:scale-105">
    <div class="text-sm text-gray-500 mb-1">{{ $titulo }}</div>
    <div class="text-2xl font-bold text-gray-800">{{ is_numeric($valor) ? number_format($valor, 2, ',', '.') : $valor }}</div>
    <div class="text-sm {{ $cor }}">
        {{ $icone }} {{ number_format($variacao, 1, ',', '.') }}%
    </div>
</div>