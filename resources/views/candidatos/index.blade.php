<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos Vacante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-center my-10">Candidatos de Vacante: {{ $vacante->titulo }}</h1>

                    <div class="md:flex md:justify-center p-5">
                        <ul class="divide-y divide-gray-200 w-full">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="p-3 flex items-center">
                                        <div class="flex-1">
                                            <p class="text-xl font-medium text-gray-800">{{ $candidato->user->name }}</p>
                                            <p class="text-sm text-gray-600">{{ $candidato->user->email }}</p>
                                            <p class="text-sm font-medium text-gray-600">
                                                Se postuló: <span class="font-normal">{{ $candidato->created_at->diffForHumans() }}</span>
                                            </p>

                                        </div>

                                        <div>
                                            <livewire:candidato-status :candidato="$candidato"/>
                                        </div>
                                </li>
                                @empty
                                    <p class="p-3 text-center text-sm text-gray-600">No hay candidatos aún</p>
                                @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
