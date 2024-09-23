<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply px-2 py-1 font-medium text-center shadow-sm ring-1 ring-slate-700/10
            rounded-md hover:bg-slate-300 text-slate-700
        }

        .link {
            @apply font-medium text-center text-amber-50 px-2 py-1  decoration-pink-500 rounded-md
             bg-amber-500 shadow-lg shadow-amber-700
        }

        label {
            @apply block uppercase text-slate-700  mb-2
        }

        input,textarea {
            @apply shadow-sm appearance-none w-full border text-slate-700 rounded-md py-2 px-3
            leading-tight  focus:outline-none
        }

        .error-message {
            @apply text-red-500 text-sm
        }
    </style>
    {{-- blade-formatter-enable --}}

    @yield('styles')
</head>

<body class="container max-w-lg mx-auto mt-10 mb-10">
    <h1 class="mb-5 text-2xl">@yield('title')</h1>
    <div x-data="{ flash: true }">
        @if (session()->has('success'))
            <div x-show="flash"
                class="relative mb-4 rounded border-green-500 bg-green-100 px-4 py-4 text-lg text-green-700 text-center"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <div>{{ session('success') }}</div>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" @click="flash = false" class="w-6 h-6 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
        @endif

        @yield('content')
    </div>

</body>

</html>
