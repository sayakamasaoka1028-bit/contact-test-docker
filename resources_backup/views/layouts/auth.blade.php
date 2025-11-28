<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FashionablyLate</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#f6f3f0]">

    <!-- 同じデザインのヘッダー -->
    <header class="w-full bg-white shadow-sm border-b border-[#e4ddd5] py-4 mb-8">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-6">
            <h1 class="text-xl font-semibold text-[#7b5a44] tracking-wide">
                FashionablyLate
            </h1>
        </div>
    </header>

    <!-- 中央カード（login/register共通） -->
    <main class="max-w-md mx-auto bg-white border border-[#e4ddd5] shadow p-10 rounded">
        @yield('content')
    </main>

</body>
</html>
