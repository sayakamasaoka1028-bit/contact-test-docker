<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        // ★ Contact データを35件生成
        Contact::factory()->count(35)->create();
    }
}
