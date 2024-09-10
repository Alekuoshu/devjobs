<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacante->titulo }}
        </h3>
        <p class="text-gray-600 text-sm font-bold">Publicado:
            <span class="font-normal normal-case">
                {{ $vacante->created_at->diffForHumans() }}
            </span>
        </p>

        <div class="md:grid md:grid-cols-2 gap-6 bg-gray-50 p-4 my-10 space-y-3 md:space-y-0">
            <p class="text-gray-800 text-sm font-bold uppercase">Empresa:
                <span class="font-normal normal-case">
                    {{ $vacante->empresa }}
                </span>
            </p>

            <p class="text-gray-800 text-sm font-bold uppercase">Último dia para postularse:
                <span class="font-normal normal-case">
                    {{ $vacante->ultimo_dia->toFormattedDateString() }}
                </span>
            </p>

            <p class="text-gray-800 text-sm font-bold uppercase">Categoría:
                <span class="font-normal normal-case">
                    {{ $vacante->categoria->categoria }}
                </span>
            </p>

            <p class="text-gray-800 text-sm font-bold uppercase">Salario:
                <span class="font-normal normal-case">
                    {{ $vacante->salario->salario }}
                </span>
            </p>

        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img class="w-full mb-5" src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="Imagen de la vacante {{ $vacante->titulo }}">
        </div>

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción del puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @auth
        @if (!$vacante->hasUserApplied(auth()->user()))
            @cannot('create', App\Models\Vacante::class)
                <livewire:postular-vacante :vacante="$vacante" />
            @endcannot
        @else
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative text-center" role="alert">
                {{ __('Ya te has postulado a esta vacante.') }}
            </div>
        @endif
    @endauth

    @guest
        <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
            <p>
                ¿Deseas aplicar a esta vacante?
                <a href="{{ route('register') }}" class="text-sky-600 font-bold">Registrate</a> o
                <a href="{{ route('login') }}" class="text-sky-600 font-bold">Ingresa</a> para aplicar.
            </p>
        </div>
    @endguest
</div>
