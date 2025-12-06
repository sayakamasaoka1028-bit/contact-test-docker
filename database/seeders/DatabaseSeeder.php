<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // カテゴリー
        $this->call(CategorySeeder::class);

        // ★ ここを追加（お問い合わせ 35 件投入）
        $this->call(ContactSeeder::class);
    }
}
