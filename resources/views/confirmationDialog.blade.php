<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body class="p-10">
<main>
    <div id="app" class="text-center">
        <div class="text-2xl font-bold mb-8">Confirmation Dialog</div>
        <div class="mb-6">
            <form method="post">
                <ConfirmButton class="px-4 rounded py-1 text-white hover:text-blue-500 bg-blue-500 hover:bg-white hover:border hover:border-blue-500"
                               message="Are you sure?"
                >
                    Option 1
                </ConfirmButton>
            </form>
        </div>

        <div class="mb-6">
            <form method="post">
                <ConfirmButton class="px-4 rounded py-1 text-white hover:text-blue-500 bg-blue-500 hover:bg-white hover:border hover:border-blue-500"
                               message="Are you sure?"
                               cancel-button="Go back"
                               confirm-button="Continue on"
                >
                    Option 2
                </ConfirmButton>
            </form>
        </div>

        <div class="mb-6">
            <form method="post" @submit.prevent="confirm('Are you really sure?')">
                <ConfirmButton class="px-4 rounded py-1 text-white hover:text-blue-500 bg-blue-500 hover:bg-white hover:border hover:border-blue-500">
                    Option 3
                </ConfirmButton>
            </form>
        </div>
        <ConfirmationDialog></ConfirmationDialog>
    </div>
</main>
</body>
</html>
