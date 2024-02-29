<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductoModel;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductoModel::create([
            'nombre' => 'Jabón',
            'precio' => 2.0,
        ]);

        ProductoModel::create([
            'nombre' => 'Cepillo',
            'precio' => 2.0,
        ]);

        ProductoModel::create([
            'nombre' => 'Champú',
            'precio' => 4.0,
        ]);

        ProductoModel::create([
            'nombre' => 'Pasta Dental',
            'precio' => 5.0,
        ]);


    }
}
