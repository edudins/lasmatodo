<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{url('css/home/styles.css')}}">
        <script src="https://kit.fontawesome.com/a5531559ec.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <section id="navbar">
            <a href="#welcome-section" class="nav-link"><span class="nav-link-span">About</span></a>
            <a href="#projects" class="nav-link"><span class="nav-link-span">Work</span></a>
            <a href="#contact-details" class="nav-link"><span class="nav-link-span">Contact</span></a>
        </section>
        <div class="bold-ghost-white relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            @yield('home.content')

        </div>
    </body>
</html>
