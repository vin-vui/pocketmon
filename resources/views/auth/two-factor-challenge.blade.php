<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 mt-6 text-sm text-gray-600" x-show="! recovery">
                {{ __('auth.confirm_code') }}
            </div>

            <div class="mb-4 mt-6 text-sm text-gray-600" x-show="recovery">
                {{ __('auth.confirm_recovery') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="/two-factor-challenge">
                @csrf

                <div class="mt-6" x-show="! recovery">
                    <x-jet-label for="code" value="{!! __('auth.auth_code') !!}" />
                    <x-jet-input id="code" class="block mt-1 w-full rounded-full" type="text" inputmode="numeric" name="code"
                        autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-6" x-show="recovery">
                    <x-jet-label for="recovery_code" value="{!! __('auth.recovery_code') !!}" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full rounded-full" type="text" name="recovery_code"
                        x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="font-medium text-blue-800 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                        x-show="! recovery" x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('auth.use_recovery_code') }}
                    </button>

                    <button type="button" class="font-medium text-blue-800 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                        x-show="recovery" x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('auth.use_auth_code') }}
                    </button>
                </div>

                <div class="block mt-6">
                    <x-jet-button
                        class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-full text-grey-900 bg-blue-800 hover:bg-blue-500 focus:outline-none focus:blue-indigo-700 focus:shadow-outline-indigo active:bg-blue-700 transition duration-150 ease-in-out">
                        {{ __('auth.login') }}
                    </x-jet-button>
                </div>

            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
