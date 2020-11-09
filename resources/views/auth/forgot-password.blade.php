<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="my-6 text-sm text-gray-600">
            {{ __('auth.forget_password') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block rounded-full mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-jet-button
                    class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-full text-grey-900 bg-blue-800 hover:bg-blue-500 focus:outline-none focus:blue-indigo-700 focus:shadow-outline-indigo active:bg-blue-700 transition duration-150 ease-in-out">
                    {{ __('auth.email_reset_link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
