<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'CD\'s', 'created_at' => now(), 'updated_at' => now(), 'id' => 1],
             ['name' => 'Camisetas', 'created_at' => now(), 'updated_at' => now(), 'id' => 2],
              ['name' => 'Tazas', 'created_at' => now(), 'updated_at' => now(), 'id' => 3],
               ['name' => 'Gorras', 'created_at' => now(), 'updated_at' => now(), 'id' => 4],
                ['name' => 'Posters', 'created_at' => now(), 'updated_at' => now(), 'id' => 5],
        ]);
    }
}
