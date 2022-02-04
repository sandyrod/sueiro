<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::firstOrCreate(['id' => 1,'name' => 'TCN','description' => 'Diseño especialmente para varios fluidos en diferentes estados, aire, vapor, etc. su diseño permite una instalación y montaje entre bridas con una posición determinada por el sentido del flujo. El respaldo mecánico de chapa perforada permite una gran resistencia mecánica al paso del fluido.Este respaldo sirve para alojamiento de un elemento filtrante con retención más exigente dando así una amplia gama de filtración 11 micrones a 3mm. Estos filtros están destinados para un uso temporal, normalmente para puestas a punto de sistemas de tuberías removiendo así suciedad e impurezas en la puesta en marcha.']);
    }
}
