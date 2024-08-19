<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List App</title>
    @yield('styles')
</head>

<body style="background-color: #595757">
    <h1>@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

</body>

</html>
