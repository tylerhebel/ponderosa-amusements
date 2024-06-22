<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ponderosa Amusements</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/js/app.js')
</head>
<body class="font-sans antialiased bg-black text-white/50">
<div class="bg-black text-white/50">
    <img id="background" class="absolute w-full h-full" src="{{ Vite::asset('resources/images/sunburst-new.jpeg') }}"/>
    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 pb-6 lg:max-w-7xl">
            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                    <div>
                        <img class="" src="{{ Vite::asset('resources/images/logo_black.jpg') }}"/>
                        <div
                            class="mt-8 rounded-lg bg-white p-2 shadow ring-4 ring-black transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 bg-zinc-900 ring-zinc-800 hover:text-white/70 hover:ring-zinc-700 focus-visible:ring-[#FF2D20]">
                            <div class="text-center sm:text-left p-4">
                                <h2 class="font-sans text-2xl font-semibold text-black text-white tracking-wider uppercase">
                                    League Signup</h2>

                                <x-primary-button class="mt-6">Signup Here</x-primary-button>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($leagues as $league)
                            <div
                                class="flex flex-col justify-between rounded-lg bg-white p-4 shadow ring-4 ring-black transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] bg-zinc-900 ring-zinc-800 hover:text-white/70 hover:ring-zinc-700 focus-visible:ring-[#FF2D20]">
                                <div class="mb-8">
                                    <h2 class="font-sans text-2xl font-semibold text-black text-white tracking-wider uppercase">
                                        League {{ $league['name'] }}</h2>
                                </div>

                                <div class="flex flex-col">
                                    <x-primary-button
                                        class="mb-4"
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
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

</body>
</html>
