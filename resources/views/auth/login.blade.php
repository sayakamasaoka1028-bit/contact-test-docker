<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#f5eee8]">

        <!-- 左上ロゴ -->
        <div class="absolute top-4 left-8 text-lg font-semibold text-gray-700">
            FashionablyLate
        </div>

        <!-- 右上 register リンク -->
        <div class="absolute top-4 right-8">
            <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:underline">register</a>
        </div>

        <!-- ログインカード -->
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-center text-xl font-bold mb-6">Login</h2>

            <!-- エラー -->
            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- メール -->
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-700 mb-1">メールアドレス</label>
                    <input id="email" type="email" name="email"
                        class="w-full border rounded p-2 bg-[#f7fbff] focus:outline-none"
                        value="{{ old('email') }}" required autofocus>
                </div>

                <!-- パスワード -->
                <div class="mb-6">
                    <label for="password" class="block text-sm text-gray-700 mb-1">パスワード</label>
                    <input id="password" type="password" name="password"
                        class="w-full border rounded p-2 bg-[#f7fbff] focus:outline-none"
                        required>
                </div>

                <!-- ログインボタン -->
                <div>
                    <button type="submit"
                        class="w-full py-2 rounded bg-[#84695e] text-white hover:bg-[#6f574d] transition">
                        ログイン
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
