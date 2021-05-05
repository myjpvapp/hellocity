<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title', env('APP_TITLE')) </title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>


<main role="main">
    @yield('content')
</main>



</body>

<footer>

@if(! Route::is('about'))
    <p>&copy; Copyright 2021 JPV &middot;  &circlearrowleft; <a href="{{ route('about') }}">à propos de moi</a> </p>
@endif
</footer>

</html>
