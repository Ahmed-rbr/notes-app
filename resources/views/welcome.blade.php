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
    <body class="bg-[#FDFDFC]  text-[#1b1b18] flex p-6 lg:p-8   min-h-screen flex-col">
        <header class="w-full justify-between items-center flex  text-sm mb-6 not-has-[nav]:hidden">
            <a href="{{ url('/') }}" class="text-black font-bold hover:cursor-pointer  text-2xl hover:text-indigo-800 "                        >
LiteNotes</a>
            @if (Route::has('login'))
                <nav class="flex justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/notes.index') }}"
class="text-indigo-600 hover:text-indigo-800 "                        >
                            LiteNotes
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
class="text-indigo-600 hover:text-indigo-800 "                        >
                        
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
class="text-indigo-600 hover:text-indigo-800 "                        >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
       
    </body>
</html>
