<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BVJ0GBP6MJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BVJ0GBP6MJ');
</script>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="index, follow" />

@php
    $pageTitle     = isset($title) ? $title . ' — Fabblogs' : config('app.name');
    $pageDesc      = $description ?? 'Fabblogs is a personal blog by Fabiana Mendoza covering software engineering, Laravel, and tech concepts.';
    $pageCanonical = $canonical ?? url()->current();
    $pageOgType    = $ogType ?? 'website';
    $pageOgImage   = $ogImage ?? asset('images/fabsblogslogo.jpeg');
@endphp

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDesc }}" />
@isset($keywords)
<meta name="keywords" content="{{ $keywords }}" />
@endisset

{{-- Canonical --}}
<link rel="canonical" href="{{ $pageCanonical }}" />

{{-- Open Graph --}}
<meta property="og:type"        content="{{ $pageOgType }}" />
<meta property="og:url"         content="{{ $pageCanonical }}" />
<meta property="og:site_name"   content="Fabblogs" />
<meta property="og:title"       content="{{ $pageTitle }}" />
<meta property="og:description" content="{{ $pageDesc }}" />
<meta property="og:image"       content="{{ $pageOgImage }}" />

{{-- Twitter Card --}}
<meta name="twitter:card"        content="summary_large_image" />
<meta name="twitter:site"        content="@FabBuilds" />
<meta name="twitter:title"       content="{{ $pageTitle }}" />
<meta name="twitter:description" content="{{ $pageDesc }}" />
<meta name="twitter:image"       content="{{ $pageOgImage }}" />

<link rel="icon" type="image/jpeg" sizes="32x32" href="{{ asset('images/fabsblogslogo.jpeg') }}">
<link rel="apple-touch-icon" href="{{ asset('images/fabsblogslogo.jpeg') }}">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
