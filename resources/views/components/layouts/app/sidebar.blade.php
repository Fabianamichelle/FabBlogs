@props(['title' => null, 'description' => null, 'keywords' => null, 'canonical' => null, 'ogType' => null, 'ogImage' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', [
            'title'       => $title,
            'description' => $description,
            'keywords'    => $keywords,
            'canonical'   => $canonical,
            'ogType'      => $ogType,
            'ogImage'     => $ogImage,
        ])
        @stack('seo')
    </head>
    <body>
        {{ $slot }}

        @fluxScripts
    </body>
</html>
