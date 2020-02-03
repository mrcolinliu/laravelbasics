<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    <body>
            <header>
                @include('partials.nav')
            </header>

        <div class="container">
            <main>
                @yield('content')
            </main>
        </div>
                @include('partials.bootstrap.scripts')

    </body>
</html>
