@extends('layouts.contact')

@section('title', 'Confirm')

@section('content')

<div class="confirm-wrapper">

    <h1 class="form-title">FashionablyLate</h1>
    <hr style="border-top:1px solid #d8ccc0; margin: 15px 0 25px;">
    <h1 class="form-title">Confirm</h1>

    <table class="confirm-table">
        <tr>
            <th>お名前</th>
            <td>{{ $data['last_name'] }}　{{ $data['first_name'] }}</td>
        </tr>

        <tr>
            <th>性別</th>
            <td>{{ ['1'=>'男性','2'=>'女性','3'=>'その他'][$data['gender']] }}</td>
        </tr>

        <tr>
            <th>メールアドレス</th>
            <td>{{ $data['email'] }}</td>
        </tr>

        <tr>
            <th>電話番号</th>
            <td>{{ $data['tel'] }}</td>
        </tr>

        <tr>
            <th>住所</th>
            <td>{{ $data['address'] }}</td>
        </tr>

        <tr>
            <th>建物名</th>
            <td>{{ $data['building'] ?: 'なし' }}</td>
        </tr>

        <tr>
            <th>お問い合わせ種類</th>
            <td>{{ $categories->firstWhere('id', $data['category_id'])->content }}</td>
        </tr>

        <tr>
            <th>お問い合わせ内容</th>
            <td class="text-area">{{ $data['detail'] }}</td>
        </tr>
    </table>

    <div class="btn-area">

        <!-- 送信ボタン -->
        <form action="{{ route('contact.store') }}" method="post" class="inline-form">
            @csrf
            @foreach($data as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach
            <button type="submit" class="submit-btn">送信</button>
        </form>

        <!-- 修正ボタン -->
        <form action="{{ route('contact.index') }}" method="get" class="inline-form">
            <button type="submit" class="back-btn">修正</button>
        </form>

    </div>

</div>

@endsection
