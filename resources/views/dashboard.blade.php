<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard de KPIs
        </h2>
    </x-slot>

    <div class="py-6 px-4 mx-auto max-w-7xl">
        <div id="kpi-container" class="flex flex-wrap gap-4"></div>

        <p id="kpi-last-update" class="text-sm text-gray-500 mt-4">
            Última atualização: carregando...
        </p>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</x-app-layout>