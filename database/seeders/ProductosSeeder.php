<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Productos;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productos::create([
            'nombre' => 'Zapatillas Nike',
            'descripcion' => 'Zapatillas deportivas de la marca Nike',
            'precio' => 99.99,
            'stock' => 100
        ]);

        Productos::create([
            'nombre' => 'Zapatillas Adidas',
            'descripcion' => 'Zapatillas deportivas de la marca Adidas',
            'precio' => 85.99,
            'stock' => 25
        ]);

        Productos::create([
            'nombre' => 'Zapatillas Puma',
            'descripcion' => 'Zapatillas deportivas de la marca Puma',
            'precio' => 57.99,
            'stock' => 120
        ]);
    }
}
