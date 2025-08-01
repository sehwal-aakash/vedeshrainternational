<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    @include('layouts.partials.admin.headerstylescripts')

    @yield('styles')
</head>
<body class="{{ Request::path() === '/' ? 'home' : Request::path() }}">

    <!-- ..::  sidebar area start ::.. -->
    @include('layouts.partials.admin.sidebar')
    <!-- ..::  sidebar area end ::.. -->

    <main class="dashboard-main">

        <!-- ..::  navbar start ::.. -->
        @include('layouts.partials.admin.navbar')
        <!-- ..::  navbar end ::.. -->

        <div class="dashboard-main-body">

            <!-- ..::  breadcrumb  start ::.. -->
            {{-- @include('layouts.partials.admin.breadcrumb') --}}
            <!-- ..::  breadcrumb  end ::.. -->

            @yield('content')

        </div>

        <!-- ..::  footer  start ::.. -->
        {{-- @include('layouts.partials.admin.footer') --}}
        <!-- ..::  footer area end ::.. -->

    </main>

    @include('layouts.partials.admin.script')

</body>
</html>