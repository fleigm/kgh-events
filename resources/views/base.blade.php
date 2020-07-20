<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>KHG Tanzkreis</title>
</head>
<body class="text-primary font-sans bg-gray-200">

<div class="flex flex-col min-h-screen items-stretch justify-between">
    <div class="container py-12 flex-1">
        <div>
            @yield('content')
        </div>
    </div>
    <div class="py-2 text-center text-sm text-secondary">
        Powered by <a class="text-blue-500" href="https://backpackforlaravel.com">Backpack for Laravel.</a>
    </div>
</div>



</body>
</html>
