<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    // ログイン必須
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ダッシュボード／会員一覧表示
    public function index()
    {
        $users = User::all(); // 全ユーザーを取得
        return view('dashboard', compact('users'));
    }
}
