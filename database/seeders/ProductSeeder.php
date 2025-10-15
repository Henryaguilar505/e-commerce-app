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
            'id'=>1,
            'name'=> 'CD almbum the dark side of te moon',
            'description' => 'CD coleccionable de Pink floyd - The dark side of the moon lanzado en 1973',
            'price'=> 29.99,
            'stock' => 25,
            'image' => 'https://tse4.mm.bing.net/th/id/OIP.pNbqWq1EjFsAtHnJwKoYcwHaHa?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3',
            'users_id'=>1,
            'categories_id' => 1,
            ],
             [
            'id'=>2,
            'name'=> 'CD almbum Appetite for Destruction',
            'description' => 'CD coleccionable de Guns and roses - Appetite for Destruction lanzado en 1987',
            'price'=> 29.99,
            'stock' => 15,
            'image' => 'https://www.obivinilos.cl/wp-content/uploads/2021/12/Guns-N-Roses-Appetite-For-Destruction.jpg',
            'users_id'=>1,
            'categories_id' => 1,
            ],
             [
            'id'=>3,
            'name'=> 'camiseta Nirvana',
            'description' => 'Camiseta de nirvana logo del album in utero',
            'price'=> 16.99,
            'stock' => 15,
            'image' => 'https://tse1.mm.bing.net/th/id/OIP.5EcOiPjvOCM1MbyJM8WEugHaHa?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3',
            'users_id'=>1,
            'categories_id' => 2,
            ],

        ]);
    }
}
