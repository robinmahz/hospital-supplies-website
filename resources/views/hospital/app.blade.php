<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>

<body bg-[#F0EBD8]>
    <nav class="sticky top-0 z-10">
        @include('hospital.components.header')
    </nav>
    <main>
        @yield('content')
    </main>
    @include('hospital.components.footer')
</body>

</html>
