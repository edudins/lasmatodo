<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="{{url('css/styles.css')}}">
</head>
<body class="antialiased">
<div class="relative">
    <nav>
        <a href="{{route('tasks.index')}}">To Do</a>
        <a href="#">Create</a>
        <a href="#">Archived</a>
    </nav>
</div>
<div class="bold-white relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    @yield('content')

</div>
</body>
</html>
