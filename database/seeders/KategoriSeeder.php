<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            [
                'id' => 1,
                'nama' => 'Kategoris A',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id' => 2,
                'nama' => 'Kategoris B',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
