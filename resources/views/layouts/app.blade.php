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

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> <!-- Ensure this file exists -->

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body>
    <div class="dashboard-container"> 
        @include('layouts.sidebar') <!-- Ensure sidebar exists -->

        <!-- Main Content -->
        <div class="main-content">
            @isset($header)
                <header class="dashboard-header">
                    <div class="header-content">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
