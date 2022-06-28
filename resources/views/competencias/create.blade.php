<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear competencia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <form action="{{ route('competencia.store') }}" method="post">
                    @csrf
                    <div class="my-1">
                        <x-jet-label for="codigo" value="{{ __('Código') }}" />
                        <x-jet-input id="codigo" class="block mt-1 w-full" type="number" name="codigo"
                            :value="old('codigo')" required autofocus />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                        <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                            :value="old('nombre')" required autofocus />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="version" value="{{ __('Version') }}" />
                        <x-jet-input id="version" class="block mt-1 w-full" type="number" name="version"
                            :value="old('version')" required autofocus />
                    </div>
                    <x-jet-button class="my-2">Guardar</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
