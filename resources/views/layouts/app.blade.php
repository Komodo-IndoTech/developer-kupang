<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#272727">
    <meta name="app_host" content="{{url('/')}}">
    <meta name="id_user" content="{{ optional(auth()->user())->id }}">
    @isset($configs)
        <meta name="configs" content="{{ $configs  }}">
    @endisset
    @if(env('APP_ENV') == "production")
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-6J8PP3LBEH');
        </script>
    @endif
    @stack('meta')
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    @isset($appjs)
        <script src="{{ mix("js/{$appjs}") }}" defer></script>
    @else
        <script src="{{ mix('js/app.js') }}" defer></script>
    @endisset
    @stack('script')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet"> --}}
    {{-- jika cdn jsdelivr di block provider --}}
    <link href="https://cdn.materialdesignicons.com/5.6.55/css/materialdesignicons.min.css" rel="stylesheet">

    @stack('css')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>