<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Room 1',
                'available_room'=>3,
                'price'=> 10000,
                'created_at' => now(),
                'updated_at' => now(),
                'hotel_id' => 1
            ],[
                'id' => 2,
                'name' => 'Room 2',
                'available_room'=>4,
                'price'=> 30000,
                'created_at' => now(),
                'updated_at' => now(),
                'hotel_id' => 2
            ],[
                'id' => 3,
                'name' => 'Room 3',
                'available_room'=>2,
                'price'=> 20000,
                'created_at' => now(),
                'updated_at' => now(),
                'hotel_id' => 1
            ],
        ]);
    }
}
