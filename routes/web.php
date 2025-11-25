<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

// ▼ お問い合わせフォーム（ユーザー側）
Route::get('/', [ContactController::class, 'index'])->name('contact.index');

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');
});

// ▼ 管理画面（認証必要）
Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/show/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ▼ Breeze の認証ルート
require __DIR__.'/auth.php';
