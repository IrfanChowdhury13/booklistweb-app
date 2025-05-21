<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">
    <header class="w-1/2 mx-auto bg-white shadow-md py-10 text-center">
        <div class="container">
            <nav>
            <div>
                <h1 class="text-4xl font-bold text-blue-500 pb-5">My Book List</h1>
                <div class="mt-4 space-x-5">
                    <a
                        wire:navigate
                        @class(['active' => request()->is('/'), 'py-2 px-5 bg-blue-500 text-white hover:bg-black active:bg-black'])
                        href="/">Book List</a>
                <a 
                    wire:navigate
                    @class(['active' => request()->is('create'), 'py-2 px-5 bg-blue-500 text-white hover:bg-black'])
                    href="/create">Add a Book</a>
                </div>
            </div>
        </nav>
        </div>
    </header>    
    <main>
        <div class="container mx-auto">
        {{ $slot }}
        </div>
    </main>
</body>

</html>
