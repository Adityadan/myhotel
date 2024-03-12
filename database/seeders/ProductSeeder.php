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
                'room_type' => 'Single', // Contoh tipe kamar
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id' => 2,
                'room_type' => 'double', // Contoh tipe kamar
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
