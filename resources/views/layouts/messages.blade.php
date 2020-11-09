<div class="fixed sm:top-16 sm:right-16 inset-0 flex items-start justify-center px-4 py-6 pointer-events-none sm:p-6 sm:justify-end z-50">

    @if (session()->has('green_message'))

    <div
        x-data="{ show: true }"
        x-show="show"
        x-description="Notification panel, show/hide based on alert state."
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="max-w-sm w-full bg-green-50 shadow-lg rounded-lg pointer-events-auto">

        <div class="rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="flex items-center">

                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-400" x-description="Heroicon name: check-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>

                    <div class="w-0 flex-1 flex justify-between ml-3">
                        <p class="w-0 flex-1 text-sm leading-5 font-medium text-green-800">
                            {{ session('green_message') }}
                        </p>
                    </div>

                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false" @click.away="setTimeout(() => show = false, 1000)"
                            class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @elseif(session()->has('red_message'))

    <div x-data="{ show: true }" x-show="show" x-description="Notification panel, show/hide based on alert state."
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-red-50 shadow-lg rounded-lg pointer-events-auto">

        <div class="rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="flex items-center">

                    <div class="flex-shrink-0">
                        <!-- Heroicon name: check-circle -->
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="w-0 flex-1 flex justify-between ml-3">
                        <p class="w-0 flex-1 text-sm leading-5 font-medium text-red-800">
                            {{ session('red_message') }}
                        </p>
                    </div>

                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false" @click.away="setTimeout(() => show = false, 1000)"
                            class="inline-flex rounded-md p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:bg-red-100 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @endif

</div>
