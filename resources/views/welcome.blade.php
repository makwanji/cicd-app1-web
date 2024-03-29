<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased">
    <div class="flex justify-center">
        <div class="block max-w-sm rounded-lg bg-white shadow-lg dark:bg-neutral-700 min-w-full ">
            <div class="p-6">
                <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center bg-gray">
                    Song List
                </h5>
            </div>
            <livewire:songs />
        </div>
    </div>
    
    @livewireScripts
</body>

</html>
