<div>

    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12 text-center md:text-left md:pl-5">Nuestras Vacantes Disponibles</h3>

            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacantes as $vacante)
                    <div wire:key='{{$vacante->id}}' class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-3xl font-extrabold text-gray-600">{{ $vacante->titulo }}</a>
                            <p class="text-gray-600 text-sm font-bold mb-3">Publicado:
                                <span class="font-normal normal-case">
                                    {{ $vacante->created_at->diffForHumans() }}
                                </span>
                            </p>

                            <p class="text-base text-gray-600 mb-1">Empresa: {{ $vacante->empresa }}</p>
                            <p class="text-sm font-bold text-gray-600 mb-1">{{ $vacante->categoria->categoria }}</p>
                            <p class="text-base text-gray-600 mb-1">{{ $vacante->salario->salario }}</p>
                            <p class="font-bold text-xs text-gray-600">
                                Último día para postularse: <span class="font-normal">{{ $vacante->ultimo_dia->format('d/m/Y') }}</span>
                            </p>
                        </div>

                        <div class="mt-5 md:mt-0">
                            <a href="{{ route('vacantes.show', $vacante) }}" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs md:text-[10px] text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 flex gap-2 items-center justify-center md:justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                Ver Vacante
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-md text-gray-600">No se encontraron vacantes</p>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="p-5">
                {{ $vacantes->links() }}
            </div>
        </div>
    </div>
</div>
