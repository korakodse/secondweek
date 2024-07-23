<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            [
                'name' => "กรุงเทพ",
                'created_at' => now(),
                'region_id' => '1'
            ],
            [
                'name' => "นนทบุรี",
                'created_at' => now(),
                'region_id' => '1'
            ],
            [
                'name' => "อุดรมีชัยพระวิหาร",
                'created_at' => now(),
                'region_id' => '2'
            ],
            [
                'name' => "พระวิหาร",
                'created_at' => now(),
                'region_id' => '2'
            ],
            [
                'name' => "จำปาศักดิ์",
                'created_at' => now(),
                'region_id' => '3'
            ],
            [
                'name' => "คำม่วน",
                'created_at' => now(),
                'region_id' => '3'
            ],
            [
                'name' => "คย็องซังเหนือ",
                'created_at' => now(),
                'region_id' => '4'
            ],
            [
                'name' => "อุลซัน",
                'created_at' => now(),
                'region_id' => '4'
            ],
            [
                'name' => "xinjiang",
                'created_at' => now(),
                'region_id' => '5'
            ],
            [
                'name' => "tibet",
                'created_at' => now(),
                'region_id' => '5'
            ],

            
        ]);
    }
}
