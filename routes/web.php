<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

// ▼ トップページをお問い合わせフォームTOPにする
Route::get('/', [ContactController::class, 'index'])->name('contact.index');

// ▼ お問い合わせフォーム（3画面）
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');          // 入力画面
    Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm'); // 確認画面
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');      // 保存
    Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');    // 完了画面 ← 修正！
});

// ▼ 会員一覧（要ログイン）
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ▼ プロフィール設定（要ログイン）
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 認証ルート（ログイン・ユーザー登録）
require __DIR__.'/auth.php';

// ▼ 管理画面
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});
