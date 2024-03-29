<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-jet-nav-link href="{{ route('ctransver') }}" :active="request()->routeIs('dashboard')">
                {{ __('Nueva trasnversalidad') }}
            </x-jet-nav-link><br>
            <a href={{ url()->previous() }}>Regresar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <livewire:transversalidades />
            </div>
        </div>
    </div>
</x-app-layout>
