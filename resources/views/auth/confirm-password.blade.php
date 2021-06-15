{{-- --------------------- --}}
{{-- Confirm Password Page --}}
{{-- --------------------- --}}

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="font-title font-black text-6xl text-shadow-dark tracking-tighter items-center text-primary-dark transition duration-500 ease-in-out hover:text-primary-light active:text-primary">
                UpOn Cart
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
