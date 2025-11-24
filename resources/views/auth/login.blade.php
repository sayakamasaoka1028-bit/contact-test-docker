@extends('layouts.auth')

@section('content')

<div class="flex justify-center mt-16">

    <div class="bg-white shadow-md rounded-lg p-10 w-96">

        <h2 class="text-center text-xl font-semibold mb-6">Login</h2>

        <!-- バリデーションエラー -->
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>・{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- メールアドレス -->
            <label class="block text-sm font-medium text-gray-700 mb-1">メールアドレス</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                class="w-full border border-gray-300 rounded p-2 mb-4 focus:outline-none focus:ring" required autofocus>

            <!-- パスワード -->
            <label class="block text-sm font-medium text-gray-700 mb-1">パスワード</label>
            <input id="password" type="password" name="password"
                class="w-full border border-gray-300 rounded p-2 mb-6 focus:outline-none focus:ring" required>

            <!-- ログインボタン -->
            <button class="w-full bg-[#7c6a61] text-white py-2 rounded hover:bg-[#6b5950]">
                ログイン
            </button>

        </form>

    </div>

</div>

@endsection
