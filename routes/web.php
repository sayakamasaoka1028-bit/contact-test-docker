<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

// ▼ トップページ → お問い合わせフォームTOP
Route::get('/', [ContactController::class, 'index'])->name('contact.index');

// ▼ お問い合わせフォーム（3画面）
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');
});

// ▼ Breeze の不要 dashboard はコメントアウト
// Route::get('/dashboard', [DashboardController::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// ▼ プロフィール設定（ログイン必須）
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ▼ 管理画面（ログイン必須）
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

// ▼ 認証ルート（ログイン・登録）
require __DIR__.'/auth.php';
