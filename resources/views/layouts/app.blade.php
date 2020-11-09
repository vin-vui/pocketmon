@include('layouts.head')

<body class="font-sans antialiased overflow-x-hidden">

    <div class="bg-gray-800 pb-32">
        @livewire('navigation-dropdown')

        <!-- Page Heading -->
        <header class="pt-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl leading-9 font-bold text-white capitalize"
                    data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                {{ $header }}
                </h1>
            </div>
        </header>
    </div>

    <!-- Page Content -->
    <main class="-mt-32 z-50" data-aos="fade-left" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    @stack('modals')

    @livewireScripts

    {{-- @include('layouts.waves') --}}

    @include('layouts.version')

</body>

</html>
