<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ponderosa Amusements</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

{{--        <script>--}}
{{--            tailwind.config = {--}}
{{--                theme: {--}}
{{--                    extend: {--}}
{{--                        fontFamily: {--}}
{{--                            sans: ['Anton'],--}}
{{--                        },--}}
{{--                    },--}}
{{--                }--}}
{{--            }--}}
{{--        </script>--}}

        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute w-full h-full" src="{{ Vite::asset('resources/images/sunburst-new.jpeg') }}" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <div>
                                <img class="" src="{{ Vite::asset('resources/images/logo_black.jpg') }}" />
                                <div class="mt-8 rounded-lg bg-white p-2 shadow ring-4 ring-black transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    <div class="">
                                        <h2 class="font-sans text-2xl font-semibold text-black dark:text-white tracking-wider uppercase">League 101</h2>

                                        <button

                                        <button>Standings</button>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                @foreach ($leagues as $league)
                                    <div class="rounded-lg bg-white p-2 shadow ring-4 ring-black transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                        <div class="mb-8">
                                            <h2 class="font-sans text-2xl font-semibold text-black dark:text-white tracking-wider uppercase">League {{ $league['name'] }}</h2>
                                        </div>

                                        <x-primary-button
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'schedule-{{ $league['id'] }}')"
                                        >{{ __('Schedule') }}</x-primary-button>

                                        <x-modal name="schedule-{{ $league['id'] }}" focusable>
                                            <pre class="text-black overflow-auto p-4">{{ $league->schedule }}</pre>
                                        </x-modal>

                                        <x-primary-button
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'standings-{{ $league['id'] }}')"
                                        >{{ __('Standings') }}</x-primary-button>

                                        <x-modal name="standings-{{ $league['id'] }}" focusable>
                                            <pre class="text-black overflow-auto p-4">{{ $league->standings }}</pre>
                                        </x-modal>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </main>

                    <footer class="my-16 text-center text-sm text-black dark:text-white/70 bg-white">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </footer>
                </div>
            </div>
        </div>

    </body>
</html>
