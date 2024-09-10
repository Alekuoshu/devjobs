<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-xl font-bold">
                        {{ $vacante->titulo }}
                    </a>

                    <p class="text-gray-600 text-sm font-bold">
                        {{ $vacante->empresa }}
                    </p>
                    <p class="text-gray-500 text-sm">
                        Fecha de postulación: {{ $vacante->getFechaPostulacion(auth()->user()) }}
                    </p>
                    <p class="text-gray-500 text-sm">
                        @php
                            $status = $vacante->candidatos()->where('user_id', auth()->user()->id)->value('status');
                        @endphp
                        Estado: <span class="italic text-{{ $status === 1 ? 'green' : 'red' }}-600">{{ $status === 1 ? 'El reclutador ha visto tu CV.' : 'El reclutador no ha visto tu CV aún.' }}</span>
                    </p>
                </div>

                <div class="flex gap-3 md:items-center mt-5 md:mt-0 flex-col md:flex-row items-stretch">
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
            <p class="p-3 text-center text-sm text-gray-600">No te has postulado a ninguna vacante aún</p>
        @endforelse

    </div>

    <div class="p-5">
        {{ $vacantes->links() }}
    </div>

</div>
