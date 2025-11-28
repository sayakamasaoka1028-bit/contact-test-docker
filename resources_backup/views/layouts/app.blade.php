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

    <!-- ヘッダー（COACHTECHデザイン） -->
    <header class="w-full bg-white shadow-sm border-b border-[#e4ddd5] py-4 mb-8">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-6">
            <h1 class="text-xl font-semibold text-[#7b5a44] tracking-wide">
                FashionablyLate
            </h1>

            @auth
            <nav>
                <a href="/admin" class="text-[#7b5a44] hover:underline mr-4">管理画面</a>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button class="text-[#7b5a44] hover:underline">
                        ログアウト
                    </button>
                </form>
            </nav>
            @endauth

            @guest
            <nav>
                <a href="/login" class="text-[#7b5a44] hover:underline mr-4">ログイン</a>
                <a href="/register" class="text-[#7b5a44] hover:underline">登録</a>
            </nav>
            @endguest
        </div>
    </header>

    <!-- メイン -->
    <main class="max-w-6xl mx-auto px-6">
        @yield('content')
    </main>

</body>
</html>
