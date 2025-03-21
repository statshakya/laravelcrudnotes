<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Note crud test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    </head>
    <body>
        @session('message')
        <div class="p-5 bg-amber-200 rounded-lg shadow-md group">
            <h1 class="text-center text-3xl text-red font-bold mb-6">
                {{ session('message') }}
            </h1>
        </div>

        @endsession
     {{ $slot }}
    </body>
</html>
