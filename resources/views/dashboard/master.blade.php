<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>

                <div class="container mx-auto">
                    @if (session('status'))
                        <div class="card card-success my-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card card-gray mt-8">
                        @yield('content')
                    </div>
                </div>

                {{-- {{ $slot }} --}}
            </main>
        </div>
    </body>
</html>




















{{--master original

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <a href="contactsaasco"><h1>logoSAASCO</h1></a>
        <a href="/">Inicio</a>
        <a href="contactsaasco">Saasco</a>
        <a href="clientes">Clientes</a>
        <a href="producto">Producto</a>
    </header>

    {{-- @session('status')
        {{ $value }}
    @endsession --}}

   {{-- @session('key')
        <h1>{{ $value }}</h1>
    @endsession

    @session('key2')
        <h1>{{ $value }}</h1>
    @endsession

    @if (session('status'))
        {{ session('status') }}
    @endif

    @yield('content')

    <section>
        @yield('morecontent')
    </section>
</body>
</html> --}}
