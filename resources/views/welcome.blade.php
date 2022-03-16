<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body>
        <header>
        </header>
        <main>
            <div id="app" class="text-center">
                <h1 class="text-2xl font-bold mb-8">Modals</h1>
                <p>
                    <a href="#cancel-modal" class="text-blue-500 underline">Open Modal</a>
                </p>
                <modal2 name="cancel-modal">
                    <h1 class="font-bold text-xl mb-2">Leaving so soon?</h1>
                    <p>Some text just to not let this space empty. Please, understand...</p>
                    <template v-slot:footer>
                        <a href="#" class="px-4 rounded py-1 text-white hover:text-red-500 bg-red-500 hover:bg-white hover:border hover:border-red-500 mr-2">Cancel</a>
                        <a href="#confirm-cancel-modal" class="px-4 rounded py-1 text-white hover:text-blue-500 bg-blue-500 hover:bg-white hover:border hover:border-blue-500">Yes</a>
                    </template>
                </modal2>

                <modal2 name="confirm-cancel-modal">
                    <h1 class="font-bold text-xl mb-2">Are you sure?</h1>
                    <p>Some text just to not let this space empty. Please, understand...</p>
                    <template v-slot:footer>
                        <a href="#" class="px-4 rounded py-1 text-white hover:text-red-500 bg-red-500 hover:bg-white hover:border hover:border-red-500 mr-2">Cancel</a>
                        <a href="#" class="px-4 rounded py-1 text-white hover:text-blue-500 bg-blue-500 hover:bg-white hover:border hover:border-blue-500">Yes, I am</a>
                    </template>
                </modal2>
            </div>
        </main>
        @livewireScripts
    </body>
</html>
