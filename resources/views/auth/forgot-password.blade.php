<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Solo haznos saber tu dirección de correo electrónico y te enviaremos un enlace de restablecimiento de contraseña que te permitirá elegir una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            @if (Route::has('password.request'))
                <x-link :href="route('register')">
                    {{ __('Crear cuenta') }}
                </x-link>

                <x-link :href="route('login')">
                    {{ __('Iniciar Sesión') }}
                </x-link>
            @endif

        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Enviar Enlace') }}
        </x-primary-button>
    </form>
</x-guest-layout>
