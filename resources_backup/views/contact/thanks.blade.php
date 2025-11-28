@extends('layouts.contact')

@section('title', 'Thanks')

@section('content')

<style>
    /* レイアウトの干渉を完全リセット */
    body {
        margin: 0 !important;
        padding: 0 !important;
    }
    .contact-wrapper,
    .contact-container {
        padding: 0 !important;
        margin: 0 !important;
        border: none !important;
        box-shadow: none !important;
        max-width: 100% !important;
    }

    /* THANKSページ専用レイアウト */
    .thanks-wrapper {
        width: 100%;
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        text-align: center;
    }

    .thanks-bg {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 180px;
        font-weight: 700;
        color: #eee8e4;
        opacity: 0.55;
        pointer-events: none;
        user-select: none;
        z-index: 1;
    }

    .thanks-content {
        position: relative;
        z-index: 10;
        text-align: center;
    }
</style>

<div class="thanks-wrapper">

    <!-- 背景 Thank you -->
    <div class="thanks-bg">Thank you</div>

    <!-- メイン表示 -->
    <div class="thanks-content">

        <p class="text-gray-700 text-lg mb-6">
            お問い合わせありがとうございました
        </p>

        <a href="{{ route('contact.index') }}"
           class="inline-block px-6 py-2 rounded text-white"
           style="background:#7b5a44; font-weight:600;">
            HOME
        </a>

    </div>

</div>

@endsection
