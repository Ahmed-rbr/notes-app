<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            @vite(['resources/css/app.css', 'resources/js/app.js'])

         <!-- Styles / Scripts -->
          
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 min-h-screen flex-col">

    <header class="w-full justify-between items-center flex text-sm mb-6 not-has-[nav]:hidden">
        <a href="{{ url('/') }}" class="text-black font-bold hover:cursor-pointer text-2xl hover:text-indigo-800">
            LiteNotes
        </a>

        
    </header>

    <main class="flex flex-col items-center justify-center flex-1 text-center">
        
        <h1 class="text-4xl md:text-6xl font-bold mb-4">
            Organize Your Thoughts, Simply.
        </h1>

        <p class="text-lg text-gray-600 max-w-xl mb-8">
            LiteNotes is a minimal and fast note-taking app to help you capture ideas,
            tasks, and inspiration — without distractions.
        </p>

        @auth
            <x-link-btn href="{{ route('notes.index') }}" class="px-6 py-3 text-lg">
                Go to My Notes
            </x-link-btn>
        @else
            <div class="flex gap-4">
                

                @if (Route::has('register'))
                <x-link-btn href="{{ route('register') }}" class="px-6 py-3 text-lg">
                    Get Started
                </x-link-btn>
                @endif
            </div>
        @endauth

    </main>

    <footer class="mt-10 text-center text-xs text-gray-500">
        © {{ date('Y') }} LiteNotes — Minimal Notes App
    </footer>

</body>

</html>
