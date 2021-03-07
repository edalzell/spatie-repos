<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <title>Spatie Repositories</title>
        @livewireStyles
    </head>
    <body class="">
        <div class="min-h-screen bg-gray-100">
            <div class="bg-indigo-600 pb-32">
                <header class="py-10">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold text-gray-100">
                            Spatie Repositories
                        </h1>
                    </div>
                </header>
            </div>

            <main class="-mt-32">
                <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>
