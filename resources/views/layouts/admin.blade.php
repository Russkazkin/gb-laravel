<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-family-karla flex">

<x-admin.sidebar></x-admin.sidebar>

<div class="w-full flex flex-col h-screen overflow-y-hidden">

    <x-admin.header></x-admin.header>

    <x-admin.mobile-nav></x-admin.mobile-nav>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
        <x-admin.alert></x-admin.alert>
        @yield('content')
        </main>

        <footer class="w-full bg-white text-right p-4">
            Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">Rus Skazkin</a>.
        </footer>
    </div>

</div>
@if (app()->isLocal())
    <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
@endif
</body>
</html>
