<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>サンクスページ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white min-h-screen flex items-center justify-center relative">

    <!-- 背景の薄い Thank you -->
    <div class="absolute inset-0 flex items-center justify-center">
        <p class="text-[160px] text-gray-200 font-bold select-none">Thank you</p>
    </div>

    <!-- メインコンテンツ -->
    <div class="relative z-10 text-center">

        <p class="text-gray-700 text-lg mb-6">お問い合わせありがとうございました</p>

        <a href="{{ route('contact.index') }}"
           class="inline-block bg-[#8d7c6f] text-white px-6 py-2 rounded">
            HOME
        </a>
    </div>

</body>
</html>
