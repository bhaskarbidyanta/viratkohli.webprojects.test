<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virat Kohli</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-800 text-white">
    @include('layouts.header')
<br><br>
    <main>
        @yield('page-content')
    </main>
    @include('layouts.footer')

</body>
</html>
