<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5eee7] min-h-screen">

    <!-- ヘッダー -->
    <header class="w-full bg-white shadow-sm border-b border-[#e4ddd5] py-4 mb-8">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-6">
            <h1 class="text-xl font-semibold text-[#7b5a44] tracking-wide">FashionablyLate</h1>

            <nav>
                <a href="/login" class="text-[#7b5a44] hover:underline mr-4">ログイン</a>
                <a href="/register" class="text-[#7b5a44] hover:underline">登録</a>
            </nav>
        </div>
    </header>

    <!-- メイン内容（ここがポイント！中央寄せ） -->
    <main class="flex justify-center">
        <div class="max-w-md w-full bg-white border border-[#e4ddd5] shadow p-10 rounded">
            {{ $slot }}
        </div>
    </main>

</body>
</html>
