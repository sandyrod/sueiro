<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product_Feature;


class Product_FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Feature::firstOrCreate(['id' => 1,'name' => 'Respaldo mecánico','description' => 'Chapa perforada 1-12mm. Material AISI 304/316','product_id' => '1']);
        Product_Feature::firstOrCreate(['id' => 2,'name' => 'Elemento Filtrante','description' => 'Malla metálica 11 micrones a 998 micrones. Material AISI 316/304 ','product_id' => '1']);
        Product_Feature::firstOrCreate(['id' => 3,'name' => 'Dimensiones','description' => 'Estándar según tuberías, las dimensiones que se pueden fabricar son desde 1 1/2" a 30".','product_id' => '1']);

    }
}
