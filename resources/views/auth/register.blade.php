<x-guest-layout>
    <h2 class="form-title">Register</h2>

    <!-- 名前 -->
    <div class="mt-4">
        <label class="label" for="name">名前</label>
        <input id="name" class="input" type="text" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <!-- メールアドレス -->
    <div class="mt-4">
        <label class="label" for="email">メールアドレス</label>
        <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <!-- パスワード -->
    <div class="mt-4">
        <label class="label" for="password">パスワード</label>
        <input id="password" class="input" type="password" name="password" required>
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <!-- パスワード確認 -->
    <div class="mt-4">
        <label class="label" for="password_confirmation">パスワード（確認）</label>
        <input id="password_confirmation" class="input" type="password" name="password_confirmation" required>
    </div>

    <!-- ボタン -->
    <div class="mt-6 flex justify-center">
        <button class="submit-btn">
            登録する
        </button>
    </div>

    <!-- ログインへ -->
    <div class="mt-4 text-center">
        <a href="{{ route('login') }}" class="text-sm text-gray-600 underline hover:text-gray-900">
            すでに登録済みですか？
        </a>
    </div>

</x-guest-layout>
