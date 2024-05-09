<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proveedor::create([
            'nombre' => 'Proveedor Nike',
            'telefono' => '123456789',
            'direccion' => 'Calle Principal 123',
            'ciudad' => 'Michigan',
            'pais' => 'EEUU',
            'cp' => '08374'
        ]);

        Proveedor::create([
            'nombre' => 'Adidas',
            'telefono' => '0987654321',
            'direccion' => 'Gnr Moragues 2',
            'ciudad' => 'Zaragoza',
            'pais' => 'España',
            'cp' => '07634'
        ]);

        Proveedor::create([
            'nombre' => 'Proveedor Puma',
            'telefono' => '652836789',
            'direccion' => 'AV Constitucion',
            'ciudad' => 'Colonia',
            'pais' => 'Alemania',
            'cp' => '53425'
        ]);
    }
}
