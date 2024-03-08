<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }}">
    <title>Blog | Learning Solutions & Change Management | Intellezy</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body x-data="{ scrollPosition: window.pageYOffset, mobileMenu: false, mainMenu: true, solutions: false, about: false, partners: false, resources: false }"
    @scroll.window="scrollPosition = window.pageYOffset"
>

    @include('components.header.header')

    {{$slot}}

    @include('components.footer.footer')

    @livewireScripts

</body>
</html>
