<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-6">
                <x-jet-label for="name" value="{{ __('auth.name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full rounded-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-6">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full rounded-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-6">
                <x-jet-label for="password" value="{{ __('auth.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full rounded-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-6">
                <x-jet-label for="password_confirmation" value="{{ __('auth.password_confirm') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full rounded-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="text-sm leading-5 mt-6 flex justify-end">
                <a href="{{ route('login') }}" class="font-medium text-blue-800 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    {{ __('auth.register_already') }}
                </a>
            </div>

            <div class="flex items-center mt-6">
                <x-jet-button
                    class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-full text-grey-900 bg-blue-800 hover:bg-blue-500 focus:outline-none focus:blue-indigo-700 focus:shadow-outline-indigo active:bg-blue-700 transition duration-150 ease-in-out">
                    {{ __('auth.register') }}
                </x-jet-button>
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
