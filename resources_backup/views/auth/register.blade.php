<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#f5eee8]">

        <!-- 左上ロゴ -->
        <div class="absolute top-4 left-8 text-lg font-semibold text-gray-700">
            FashionablyLate
        </div>

        <!-- 右上 login リンク -->
        <div class="absolute top-4 right-8">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:underline">login</a>
        </div>

        <!-- カード -->
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-center text-xl font-bold mb-6">Register</h2>

            <!-- エラー -->
            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- 名前 -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-700 mb-1">名前</label>
                    <input type="text" name="name" class="w-full border rounded p-2 bg-[#f7fbff]" value="{{ old('name') }}" required>
                </div>

                <!-- メール -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-700 mb-1">メールアドレス</label>
                    <input type="email" name="email" class="w-full border rounded p-2 bg-[#f7fbff]" value="{{ old('email') }}" required>
                </div>

                <!-- パスワード -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-700 mb-1">パスワード</label>
                    <input type="password" name="password" class="w-full border rounded p-2 bg-[#f7fbff]" required>
                </div>

                <!-- パスワード確認 -->
                <div class="mb-6">
                    <label class="block text-sm text-gray-700 mb-1">パスワード確認</label>
                    <input type="password" name="password_confirmation" class="w-full border rounded p-2 bg-[#f7fbff]" required>
                </div>

                <!-- 登録ボタン -->
                <div>
                    <button type="submit"
                        class="w-full py-2 rounded bg-[#84695e] text-white hover:bg-[#6f574d] transition">
                        登録
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
