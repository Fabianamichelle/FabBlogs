<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
        {{ $slot }}

        @fluxScripts
    </body>
</html>
