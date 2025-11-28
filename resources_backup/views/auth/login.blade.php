@extends('layouts.guest')

@section('content')

<h2 class="text-center text-xl text-[#7b5a44] font-semibold mb-6">Login</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email -->
    <div class="mb-4">
        <label class="block text-[#7b5a44] font-medium mb-1">メールアドレス</label>
        <input type="email" name="email"
               class="w-full border border-[#d8ccc0] p-2 rounded bg-[#f7efea]"
               value="{{ old('email') }}" required autofocus>
    </div>

    <!-- Password -->
    <div class="mb-6">
        <label class="block text-[#7b5a44] font-medium mb-1">パスワード</label>
        <input type="password" name="password"
               class="w-full border border-[#d8ccc0] p-2 rounded bg-[#f7efea]"
               required>
    </div>

    <button class="w-full bg-[#7b5a44] text-white py-2 rounded">
        ログイン
    </button>
</form>

@endsection
