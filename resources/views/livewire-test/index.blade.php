<html>
    <head>
        @livewireStyles
    </head>
    <body>
        aaaiii
        @if (session()->has('message'))
            <div class="alert alert-sucess">
                {{ session('message')}}
            </div>
        @endif
        {{-- <livewire:counter /> --}}
        @livewire('counter')
        @livewireScripts
    </body>
</html>
