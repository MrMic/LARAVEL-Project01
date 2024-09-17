<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply px-2 py-1 font-medium text-center shadow-sm ring-1 ring-slate-700/10
            rounded-md hover:bg-slate-300 text-slate-700
        }

        .link {
            @apply font-medium text-center text-amber-50 px-2 py-1  decoration-pink-500 rounded-md
             bg-amber-500 rounded-full shadow-lg shadow-amber-700        }
    </style>
    {{-- blade-formatter-enable --}}

    @yield('styles')
</head>

<body class="container max-w-lg mx-auto mt-10 mb-10">
    <h1 class="mb-5 text-2xl">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

</body>

</html>
