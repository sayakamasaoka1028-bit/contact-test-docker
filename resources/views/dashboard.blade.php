@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">会員一覧</h1>

    <table class="table-auto w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">名前</th>
                <th class="px-4 py-2 border">メール</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="text-center">
                    <td class="px-4 py-2 border">{{ $user->name }}</td>
                    <td class="px-4 py-2 border">{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
