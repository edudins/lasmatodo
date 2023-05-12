<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{url('css/styles.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative">
            <nav class="p-2">
                <a class="border-1" href="{{route('tasks.index')}}">To Do</a>
                <a class="border-1" href="{{route('tasks.create')}}">Create</a>
                <a class="border-1" href="{{route('tasks.archived')}}">Archived</a>
            </nav>
        </div>
        <div class="bold-ghost-white relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            @yield('content')

        </div>
    </body>
</html>
