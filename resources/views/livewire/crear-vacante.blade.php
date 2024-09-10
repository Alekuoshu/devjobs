<form class="md:w-1/2 space-y-5" wire:submit.prevent="crearVacante">
    <div>
        <x-input-label
            for="titulo"
            :value="__('Título')"
        />
        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Título de la vacante"
        />
        {{-- @error('titulo')
            <livewire:mostrar-alerta :messages="$errors->get('titulo')"/>
        @enderror --}}

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select
                wire:model="salario"
                id="salario"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
                <option value="">-- Selecciona un salario</option>
                @if (isset($salarios))
                    @foreach ($salarios as $salario)
                    <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
                    @endforeach
                @endif
            </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select
                wire:model="categoria"
                id="categoria"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
                <option value="">-- Selecciona una categoría</option>
                @if (isset($categorias))
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                @endif
            </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label
            for="empresa"
            :value="__('Empresa')"
        />
        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Ej: Netflix, Uber, Shopify"
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label
            for="ultimo_dia"
            :value="__('Último día para postularse')"
        />
        <x-text-input
            id="ultimo_dia"
            class="block mt-1 w-full"
            type="date"
            wire:model="ultimo_dia"
            :value="old('ultimo_dia')"
        />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label
            for="descripcion"
            :value="__('Descripción Puesto')"
        />
        <textarea
            id="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-52"
            wire:model="descripcion"
        ></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label
            for="imagen"
            :value="__('Imagen')"
        />
        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            wire:model="imagen"
            accept="image/*"
        />

            @if ($imagen)
                <div class="my-6 w-9/12">
                    Imagen:
                    <img src="{{ $imagen->temporaryUrl() }}" alt="imagen temporal">
                </div>
            @endif
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>


    <x-primary-button class="w-full justify-center">
        {{ __('Crear Vacante') }}
    </x-primary-button>
</form>
