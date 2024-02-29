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
    @include('hospital.components.header')
    <main>
        @yield('content')
    </main>
    @include('hospital.components.footer')
</body>

</html>
