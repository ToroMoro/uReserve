<html>
    <head>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles


         <!-- Styles -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <span color="blue">Register</span>
        {{-- <livewire:counter /> --}}
        @livewire('register')
        @livewireScripts
    </body>
</html>
