<x-app-layout>
    @php
        $currentURL = Request::segment(2);


    @endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Regresar') }}
        </h2>
        <h2>
            <x-jet-nav-link href="{{ route('detalle.update',$currentURL) }}" :active="request()->routeIs('dashboard')">
                {{ __('Editar detallce') }}
            </x-jet-nav-link>
        </h2>

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:detail />
            </div>
        </div>
    </div>
</x-app-layout>


