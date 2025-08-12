@php
    use Illuminate\Support\Str;

    $path = trim(Request::path(), '/'); // Remove leading/trailing slashes
    $segments = explode('/', $path);
    $segmentCount = count($segments);

    $classes = [];

    if ($path === '') {
        // Homepage
        $classes[] = 'home';
    } elseif ($segmentCount === 1) {
        // Single page like /about or /services
        $classes[] = 'page-' . $segments[0];
    } elseif ($segmentCount > 1) {
        // Nested page like /services/web-design-and-development
        $slugified = str_replace('/', '-', $path); // services-web-design-and-development
        $base = $segments[0]; // services
        $classes[] = $slugified;
        $classes[] = $base . '-detail-page';
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('meta')
    <title>@yield('title')</title>

    

    @include('layouts.partials.headerstylescripts')

    @yield('styles')
</head>

<body class="{{ implode(' ', $classes) }}">

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M32753CK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    @include('layouts.partials.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.partials.footer')

    @include('layouts.partials.footerscripts')

    @yield('scripts')
</body>
</html>