<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>FashionablyLate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5eee7] min-h-screen">

    <!-- ヘッダー -->
    <header class="w-full bg-[#f5eee7] py-4 shadow-sm">
        <div class="max-w-5xl mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-semibold text-gray-700">FashionablyLate</h1>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="text-sm text-gray-600 hover:text-gray-800">
                   register
                </a>
            @endif
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
