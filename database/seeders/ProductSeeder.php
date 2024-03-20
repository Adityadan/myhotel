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
                'name' => 'Single type room',
                'price'=> 10000,
                'created_at' => now(),
                'updated_at' => now(),
                'hotel_id' => 1
            ], /* [
                'id' => 2,
                'name' => 'double type room',
                'price'=> 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ] */
        ]);
    }
}
