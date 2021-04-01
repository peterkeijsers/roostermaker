<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-gray-100">

    <x-navigation :user="Auth::user()" />
    
    <div class="grid grid-cols-12 gap-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-4 sm:py-6 lg:py-8 bg-white rounded">

        @isset($leftSidebar)
        <!-- Left sidebar -->
        <aside class="left-sidebar col-span-4">
            {{ $leftSidebar }}
        </aside>
        @endisset

        @isset($mainContent)
        <!-- Main Content -->
        <main class="col-span-8">
            {{ $mainContent }}
        </main>
        @endisset

        @isset($rightSidebar)
        <!-- Right sidebar -->
        <aside class="right-sidebar col-span-4">
            {{ $rightSidebar }}
        </aside>
        @endisset
    </div>

    <x-error-messages />
    
</body>

</html>