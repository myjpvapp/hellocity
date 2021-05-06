<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>{{ isset($pagetitle) ? config('app.name') .'testjp' :  config('app.name') }} </title>





    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>


<main role="main">
    @yield('content')





</main>



</body>

@include('layouts/partials/_footer')

</html>
