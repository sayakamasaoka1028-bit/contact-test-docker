@extends('layouts.guest')

@section('content')
<div class="flex flex-col items-center gap-6">

    <h2 class="text-xl font-bold text-[#7b5a44] mb-4">
        FashionablyLate – Dashboard
    </h2>

    <!-- Contact List -->
    <a href="/admin" class="w-64 p-4 bg-white shadow border rounded-md flex items-center gap-3 hover:bg-[#f5eee8] transition">
        <span class="text-2xl">📝</span>
        <div>
            <p class="font-semibold text-[#7b5a44]">Contact List</p>
            <p class="text-sm text-gray-600">View all user inquiries.</p>
        </div>
    </a>

    <!-- Search Contacts -->
    <a href="/admin?keyword=" class="w-64 p-4 bg-white shadow border rounded-md flex items-center gap-3 hover:bg-[#f5eee8] transition">
        <span class="text-2xl">🔍</span>
        <div>
            <p class="font-semibold text-[#7b5a44]">Search Contacts</p>
            <p class="text-sm text-gray-600">Search by keyword, gender, or category.</p>
        </div>
    </a>

    <!-- User management -->
    <a href="#" class="w-64 p-4 bg-white shadow border rounded-md flex items-center gap-3 hover:bg-[#f5eee8] transition">
        <span class="text-2xl">👤</span>
        <div>
            <p class="font-semibold text-[#7b5a44]">User Management</p>
            <p class="text-sm text-gray-600">Admin tools for managing users.</p>
        </div>
    </a>

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="mt-4 px-6 py-2 bg-[#7b5a44] text-white rounded hover:bg-[#5c4032] transition">
            Logout
        </button>
    </form>

</div>
@endsection
