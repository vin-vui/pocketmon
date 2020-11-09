@include('layouts.head')

    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @include('layouts.waves')

        @include('layouts.version')

    </body>
</html>
