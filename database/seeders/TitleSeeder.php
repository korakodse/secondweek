<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('titles')->insert([
            [
                'pre' => "นาย",
                'created_at' => now(),
            ],
            [
                'pre' => "นาง",
                'created_at' => now(),
            ],
            [
                'pre' => "นางสาว",
                'created_at' => now(),
            ]
        ]);
    }
}
