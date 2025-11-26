<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FashionablyLate - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f6f3f0;
            font-family: 'Figtree', sans-serif;
        }

        .contact-wrapper {
            padding: 40px 0;
            width: 100%;
        }

        .contact-container {
            max-width: 720px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border: 1px solid #e4ddd5;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.03);
        }

        .contact-title,
        .form-title {
            font-size: 28px;
            color: #7b5a44;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .contact-heading,
        .form-subtitle {
            font-size: 20px;
            color: #7b5a44;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .row {
            margin-bottom: 18px;
        }

        .label {
            display: block;
            font-weight: 600;
            color: #7b5a44;
            margin-bottom: 6px;
        }

        .input,
        select,
        textarea {
            width: 100%;
            border: 1px solid #d8ccc0;
            padding: 8px;
            border-radius: 4px;
        }

        /* 入力欄を薄いピンクにする */
        .input,
        textarea,
        select {
        background-color: #f7efea;
        }


        textarea { height: 100px; }

        .req { color: #d9534f; font-weight: bold; }

        .radio-group label { margin-right: 20px; }

        .confirm-wrapper {
            max-width: 720px;
            margin: 40px auto;
            background: white;
            padding: 40px;
            border: 1px solid #e4ddd5;
            border-radius: 8px;
        }

        .confirm-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .confirm-table th {
            background: #faf7f3;
            width: 30%;
            padding: 10px;
            text-align: left;
            border: 1px solid #e4ddd5;
        }

        .confirm-table td {
            padding: 10px;
            border: 1px solid #e4ddd5;
        }

        .btn-area {
            text-align: center;
            margin-top: 20px;
        }

        .submit-btn {
            padding: 10px 30px;
            background: #7b5a44;
            color: white;
            border-radius: 4px;
            font-weight: 600;
            margin-right: 20px;
        }

        .back-btn {
            padding: 10px 30px;
            background: #c9b8a5;
            color: white;
            border-radius: 4px;
            font-weight: 600;
        }
           .btn-area {
            text-align: center;
            margin-top: 30px;
        }

           .inline-form {
           display: inline-block;
           margin: 0 10px;
        }

          .submit-btn,
          .back-btn {
          width: 120px;
          padding: 8px 0;
          border: none;
          border-radius: 5px;
          font-weight: 600;
          cursor: pointer;
        }

         /* 送信ボタン */
          .submit-btn {
          background-color: #7b5a44;
          color: #fff;
          }

         /* 修正ボタン */
         .back-btn {
          background-color: #d9cfc7;
          color: #333;
          }

          .input:focus,
          textarea:focus,
          select:focus {
          outline: none;
          border-color: #bfa48f; /* ほんのり濃いブラウン */
          box-shadow: 0 0 3px rgba(191, 164, 143, 0.6);
          }
          .input,
          textarea,
          select {
          color: #5a463a;
          }

         </style>
</head>

<body>

    <!-- ★ 正しい位置のヘッダー（白線あり） -->
    <header class="w-full bg-white border-b border-[#d8ccc0] py-6 mb-10">
   </header>
    <!-- メイン -->
    @yield('content')
</body>
</html>
