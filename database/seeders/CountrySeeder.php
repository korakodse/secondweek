<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'name' => "ไทย",
                'created_at' => now(),
            ],
            [
                'name' => "กัมพูชา",
                'created_at' => now(),
            ],
            [
                'name' => "ลาว",
                'created_at' => now(),
            ],
            [
                'name' => "เกาหลี",
                'created_at' => now(),
            ],
            [
                'name' => "จีน",
                'created_at' => now(),
            ],
            
        ]);
    }
}
