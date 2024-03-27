<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'id' => 1,
                'nama' => 'Barang A',
                'created_at' => now(),
                'updated_at' => now(),
                'kategori_id' => 1,
            ], [
                'id' => 2,
                'nama' => 'Barang B',
                'created_at' => now(),
                'updated_at' => now(),
                'kategori_id' => 2,
            ],[
                'id' => 3,
                'nama' => 'Barang C',
                'created_at' => now(),
                'updated_at' => now(),
                'kategori_id' => 2,
            ]
        ]);
    }
}
