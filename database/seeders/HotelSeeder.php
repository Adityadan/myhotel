<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            'name' => Str::random(20),
            'address' => Str::random(20),
            'postcode' => Str::random(6),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'country_id' => random_int(1, 100),
            'longitude' => rand(-18000, 18000) / 1000.0,
            'latitude' => rand(-9000, 9000) / 1000.0,
            'phone' => Str::random(10),
            'fax' => Str::random(10),
            'email' => Str::random(10) . '@example.com',
            'currency' => Str::random(3),
            'accommodation_type' => Str::random(10),
            'category' => Str::random(10),
            'web' => 'https://www.example.com',
            'type_id'=>1,
            'product_id'=>1,
        ]);

    }
}
