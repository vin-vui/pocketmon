<x-guest-layout>
    <x-jet-authentication-card>

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class=mt-6>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full rounded-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-6">
                <x-jet-label for="password" value="{{ __('auth.password') }}" />
                <x-jet-input id="password" class="block mt-1 rounded-full w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="mt-6 flex items-center justify-between">

                <div class="flex items-center">
                  <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-blue-800 transition duration-150 ease-in-out">
                  <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                    {{ __('auth.remember') }}
                  </label>
                </div>

                @if (Route::has('password.request'))
                <div class="text-sm leading-5">
                  <a href="{{ route('password.request') }}" class="font-medium text-blue-800 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    {{ __('auth.password_forget') }}
                  </a>
                </div>
                @endif

            </div>

            <div class="text-sm leading-5 mt-1 flex justify-end">
                <a href="{{ route('register') }}" class="font-medium text-blue-800 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    {{ __('auth.register_not_yet') }}
                </a>
            </div>

            <div class="block mt-6">
                <x-jet-button
                    class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-full text-grey-900 bg-blue-800 hover:bg-blue-500 focus:outline-none focus:blue-indigo-700 focus:shadow-outline-indigo active:bg-blue-700 transition duration-150 ease-in-out">
                    {{ __('auth.login') }}
                </x-jet-button>
            </div>

        </form>

    </x-jet-authentication-card>
</x-guest-layout>
