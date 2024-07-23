<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            [
                'name' => "ภาคกลาง",
                'created_at' => now(),
                'country_id' => '1'
            ],
            [
                'name' => "ภาคเหนือ",
                'created_at' => now(),
                'country_id' => '2'
            ],
            [
                'name' => "ภาคใต้",
                'created_at' => now(),
                'country_id' => '3'
            ],
            [
                'name' => "ภาคตะวันออก",
                'created_at' => now(),
                'country_id' => '4'
            ],
            [
                'name' => "ภาคตะวันตก",
                'created_at' => now(),
                'country_id' => '5'
            ],
            
        ]);
    }
}
