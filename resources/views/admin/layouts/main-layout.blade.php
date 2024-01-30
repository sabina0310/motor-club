<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Motor Club</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>
</head>

<body class=" font-poppins text-black selection:bg-primary selection:text-secondary flex flex-col">
    @include('admin.components.sidebar')

    <main class="mt-28 ml-80 mr-40">
        @yield('content')
    </main>

</body>

</html>
