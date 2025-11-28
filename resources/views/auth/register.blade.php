@extends('layouts.guest')

@section('content')

<!-- カード -->
<h2 class="text-center text-xl font-bold mb-6 text-[#7b5a44]">Register</h2>

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
        <label class="block text-sm text-[#7b5a44] mb-1">名前</label>
        <input type="text" name="name"
               class="w-full border border-[#d8ccc0] rounded p-2 bg-[#f7efea]"
               value="{{ old('name') }}" required>
    </div>

    <!-- メール -->
    <div class="mb-4">
        <label class="block text-sm text-[#7b5a44] mb-1">メールアドレス</label>
        <input type="email" name="email"
               class="w-full border border-[#d8ccc0] rounded p-2 bg-[#f7efea]"
               value="{{ old('email') }}" required>
    </div>

    <!-- パスワード -->
    <div class="mb-4">
        <label class="block text-sm text-[#7b5a44] mb-1">パスワード</label>
        <input type="password" name="password"
               class="w-full border border-[#d8ccc0] rounded p-2 bg-[#f7efea]"
               required>
    </div>

    <!-- パスワード確認 -->
    <div class="mb-6">
        <label class="block text-sm text-[#7b5a44] mb-1">パスワード確認</label>
        <input type="password" name="password_confirmation"
               class="w-full border border-[#d8ccc0] rounded p-2 bg-[#f7efea]"
               required>
    </div>

    <!-- 登録ボタン -->
    <button type="submit"
        class="w-full py-2 rounded bg-[#7b5a44] text-white hover:bg-[#6f574d] transition">
        登録
    </button>

</form>

@endsection
