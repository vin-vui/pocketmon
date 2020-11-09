@include('layouts.head')

<body class="antialiased">

    <div class="flex items-center h-screen bg-gray-100">
        <div class="flex-1 text-gray-700 text-center">
            <main class="mx-auto max-w-screen-xl">

                <div class="text-center">
                    <img data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out"
                        class="mx-auto" src="{{ url('/img/logo.svg') }}">

                    <p data-aos="fade-left" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out"
                        class="my-12 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        {{ __('auth.message') }}
                    </p>

                    @if (Route::has('login'))
                    <div class="mx-5 sm:mx-0">

                        @auth
                        <p data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out"
                            class="text-2xl text-gray-700 mt-6 capitalize">{{ __('auth.hello') }} {{ Auth::user()->name }} !</p>

                        <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="800" data-aos-easing="ease-in-out"
                            class="rounded-full shadow sm:w-1/3 flex items-center mx-auto mt-6">
                            <a href="{{ url('/dashboard') }}"
                                class="w-full justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-full text-white bg-blue-800 hover:bg-blue-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Dashboard
                            </a>
                        </div>

                        <form data-aos="fade-up" data-aos-offset="200" data-aos-delay="150" data-aos-duration="800" data-aos-easing="ease-in-out"
                            class="rounded-full shadow sm:w-1/3 flex items-center mx-auto mt-3" method="POST"
                            action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                                class="capitalize w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-full text-blue-800 bg-white hover:text-blue-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                {{ __('auth.logout') }}
                            </x-jet-dropdown-link>
                        </form>

                        @else

                        <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out"
                            class="rounded-full shadow-xl sm:w-1/3 flex items-center mx-auto mt-6">
                            <a href="{{ route('login') }}"
                                class="capitalize w-full justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-full text-white bg-blue-800 hover:bg-blue-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                {{ __('auth.start') }}
                            </a>
                        </div>

                        @if (Route::has('register'))

                        <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="150" data-aos-duration="800" data-aos-easing="ease-in-out"
                            class="rounded-full shadow-xl sm:w-1/3 flex items-center mx-auto mt-3">
                            <a href="{{ route('register') }}"
                                class="capitalize w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-full text-blue-800 bg-white hover:text-blue-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                {{ __('auth.register') }}
                            </a>
                        </div>

                        @endif
                        @endif
                    </div>
                    @endif

                </div>
            </main>
        </div>
    </div>

    @include('layouts.waves')

    @include('layouts.version')

</body>

</html>
