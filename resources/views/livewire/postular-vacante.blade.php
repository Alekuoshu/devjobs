<div class="bg-gray-100 text-center p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-2xl font-bold my-4 text-center">Postularme a esta vacante</h3>

    @if (session()->has('candidato_success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-5 rounded relative" role="alert">
            {{ session('candidato_success') }}
        </div>
    @else
        @if (session()->has('candidato_error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative" role="alert">
                {{ session('candidato_error') }}
            </div>
        @else
            <form class="w-96 mt-5" wire:submit.prevent="postularme">
                <div class="mb-4">
                    <x-input-label for="cv" :value="__('Curriculum u Hoja de Vida (PDF)')" />
                    <x-text-input type="file" name="cv" id="cv" accept=".pdf" class="block mt-1 w-full" wire:model="cv"/>
                </div>

                <x-input-error :messages="$errors->get('cv')" class="mt-2" />

                <x-primary-button type="submit" class="my-5">{{ __('Postularme') }}</x-primary-button>
            </form>
        @endif
    @endif
</div>
