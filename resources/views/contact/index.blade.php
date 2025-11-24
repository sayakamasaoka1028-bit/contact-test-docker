@extends('layouts.contact')

@section('content')
<div class="contact-wrapper">
    <div class="contact-container">

        <h1 class="contact-title">FashionablyLate</h1>

        <div class="contact-box">
            <h2 class="contact-heading">Contact</h2>

            <form method="POST" action="{{ route('contact.confirm') }}" class="contact-form">
                @csrf

                {{-- 姓 --}}
                <div class="row">
                    <label class="label">姓 <span class="req">*</span></label>
                    <input type="text" name="last_name" class="input">
                </div>

                {{-- 名 --}}
                <div class="row">
                    <label class="label">名 <span class="req">*</span></label>
                    <input type="text" name="first_name" class="input">
                </div>

                {{-- 性別 --}}
                <div class="row">
                    <label class="label">性別 <span class="req">*</span></label>
                    <div class="radio-group">
                    <label><input type="radio" name="gender" value="1"> 男性</label>
                    <label><input type="radio" name="gender" value="2"> 女性</label>
                    <label><input type="radio" name="gender" value="3"> その他</label>

                    </div>
                </div>

                {{-- メール --}}
                <div class="row">
                    <label class="label">メールアドレス <span class="req">*</span></label>
                    <input type="email" name="email" class="input">
                </div>

                {{-- 電話番号 --}}
                <div class="row">
                    <label class="label">電話番号 <span class="req">*</span></label>
                    <input type="text" name="tel" class="input">
                </div>

                {{-- 住所 --}}
                <div class="row">
                    <label class="label">住所 <span class="req">*</span></label>
                    <input type="text" name="address" class="input">
                </div>

                {{-- 建物名 --}}
                <div class="row">
                    <label class="label">建物名</label>
                    <input type="text" name="building" class="input">
                </div>

                {{-- お問い合わせ種類 --}}
                <div class="row">
                    <label class="label">お問い合わせ種類 <span class="req">*</span></label>
                    <select name="category_id" class="input">
                    <option value="">選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>

                {{-- お問い合わせ内容 --}}
                <div class="row">
                    <label class="label">お問い合わせ内容 <span class="req">*</span></label>
                    <textarea name="detail" class="textarea"></textarea>
                </div>

                {{-- ボタン --}}
                <div class="btn-area">
                    <button type="submit" class="submit-btn">確認画面へ</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
