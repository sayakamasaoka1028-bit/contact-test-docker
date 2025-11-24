<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>詳細画面</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <!-- モーダル背景 -->
    <div class="fixed inset-0 bg-black bg-opacity-10"></div>

    <!-- モーダル本体 -->
    <div class="bg-white w-3/5 max-w-2xl p-10 rounded shadow-xl relative z-10">

        <!-- 閉じるボタン -->
        <a href="{{ route('admin.index') }}" class="absolute top-4 right-4 text-gray-500 hover:text-black text-2xl">
            ×
        </a>

        <h2 class="text-center text-xl font-semibold mb-6">お問い合わせ内容</h2>

        <!-- 内容一覧 -->
        <div class="space-y-4">
            <div>
                <p class="font-bold text-sm text-gray-600">お名前</p>
                <p>{{ $contact->last_name }}　{{ $contact->first_name }}</p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">性別</p>
                <p>
                    @if ($contact->gender == 1) 男性
                    @elseif ($contact->gender == 2) 女性
                    @else その他
                    @endif
                </p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">メールアドレス</p>
                <p>{{ $contact->email }}</p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">電話番号</p>
                <p>{{ $contact->tel }}</p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">住所</p>
                <p>{{ $contact->address }}</p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">建物名</p>
                <p>{{ $contact->building }}</p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">お問い合わせの種類</p>
                <p>{{ $contact->category->content }}</p>
            </div>

            <div>
                <p class="font-bold text-sm text-gray-600">お問い合わせ内容</p>
                <p class="whitespace-pre-wrap">{{ $contact->detail }}</p>
            </div>
        </div>

        <!-- 削除ボタン -->
        <form action="{{ route('admin.destroy', $contact->id) }}" method="POST" class="text-center mt-8">
            @csrf
            @method('DELETE')
            <button class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                削除
            </button>
        </form>

    </div>

</body>
</html>
