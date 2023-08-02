<!DOCTYPE html>
<html>

<head lang="{{ App::currentLocale() }}" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (App::isLocale('ar'))
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    @endif
    <title>{{ __('Multilanguage System') }}</title>
</head>

<body>
    @include('layout.nav.navbar')
    <section class="hero is-info">
        <div class="hero-body">
            <p class="title">
                {{ __('Welcome') }}
            </p>
            {{-- <p class="subtitle">
                Info subtitle
            </p> --}}
        </div>
    </section>
    @yield('content')
    @include('layout.footer')
</body>

</html>