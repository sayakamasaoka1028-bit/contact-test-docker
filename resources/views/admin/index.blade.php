<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理画面 - 一覧</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- 上部ヘッダー -->
    <div class="w-full bg-[#f7f2ee] py-4 shadow-sm mb-8">
         <div class="max-w-5xl mx-auto flex justify-center items-center relative px-4">
<!-- 中央寄せタイトル -->
        <h1 class="text-xl font-semibold text-gray-700 text-center w-full">
            FashionablyLate
        </h1>

       <!-- 右端固定 Logout -->
       <form method="POST" action="{{ route('logout') }}" class="absolute right-4">
       @csrf
        <button class="text-sm text-gray-600 hover:text-gray-800">
       Logout
       </button>
        </form>


        </div>
    </div>
<div class="max-w-5xl mx-auto bg-white shadow-md rounded p-6">
<h1 class="text-2xl font-bold mb-6 text-center">Admin</h1>
<!-- 検索フォーム -->
<form method="GET" action="{{ route('admin.index') }}" class="mb-6 bg-[#f9f6f2] p-4 rounded-md shadow-sm">

    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">

        <!-- 氏名検索 -->
        <div>
            <label class="block text-sm text-gray-600 font-semibold">氏名</label>
            <input type="text" name="keyword" value="{{ request('keyword') }}"
                   class="border p-2 rounded w-full">
        </div>

        <!-- 性別 -->
        <div>
            <label class="block text-sm text-gray-600 font-semibold">性別</label>
            <select name="gender" class="border p-2 rounded w-full">
                <option value="">すべて</option>
                <option value="1" @selected(request('gender') == 1)>男性</option>
                <option value="2" @selected(request('gender') == 2)>女性</option>
                <option value="3" @selected(request('gender') == 3)>その他</option>
            </select>
        </div>

        <!-- 種類 -->
        <div>
            <label class="block text-sm text-gray-600 font-semibold">お問い合わせ種類</label>
            <select name="category_id" class="border p-2 rounded w-full">
                <option value="">すべて</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>
                        {{ $category->content }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- 開始日 -->
        <div>
            <label class="block text-sm text-gray-600 font-semibold">開始日</label>
            <input type="date" name="from" value="{{ request('from') }}"
                   class="border p-2 rounded w-full">
        </div>

        <!-- 終了日 -->
        <div>
            <label class="block text-sm text-gray-600 font-semibold">終了日</label>
            <input type="date" name="to" value="{{ request('to') }}"
                   class="border p-2 rounded w-full">
        </div>

    </div>

    <!-- ボタン -->
    <div class="mt-4 flex gap-4">
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">
            検索
        </button>

        <a href="{{ route('admin.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
            リセット
        </a>
    </div>

</form>

        <!-- 一覧テーブル -->
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-[#f3ebe4] text-left border-b border-[#d6ccc6]">
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">氏名</th>
                    <th class="p-3 border">性別</th>
                    <th class="p-3 border">メール</th>
                    <th class="p-3 border">種類</th>
                    <th class="p-3 border">内容</th>
                    <th class="p-3 border"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($contacts as $contact)
                    <tr class="hover:bg-gray-50">
                    <td class="p-3 border border-[#d6ccc6]">
                       {{ $contact->id }}
                    </td>

                    <td class="p-3 border border-[#d6ccc6]">
                       {{ $contact->last_name }} {{ $contact->first_name }}
                    </td>

                    <td class="p-3 border border-[#d6ccc6]">
                      @if ($contact->gender == 1)
                        男性
                      @elseif ($contact->gender == 2)
                        女性
                      @else
                        その他
                      @endif
                    </td>

                    <td class="p-3 border border-[#d6ccc6]">
                       {{ $contact->email }}
                    </td>

                    <td class="p-3 border border-[#d6ccc6]">
                       {{ $contact->category->content ?? '不明' }}
                    </td>

                    <td class="p-3 border border-[#d6ccc6]">
                       {{ Str::limit($contact->detail, 15) }}
                    </td>

                    <td class="p-3 border border-[#d6ccc6] text-center">
                    <a href="{{ route('admin.show', $contact->id) }}"
                    class="bg-[#7c6a61] text-white px-4 py-1 rounded hover:bg-[#6b5950]">
                      詳細
                    </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- ページネーション -->
        <div class="mt-6 flex justify-center">
             {{ $contacts->links() }}
       </div>



    </div>

</body>
</html>
