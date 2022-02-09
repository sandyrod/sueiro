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


        Product_Feature::firstOrCreate(['id' => 4,'name' => 'Presión Máxima admisible','description' => '6 kgf/cm2','product_id' => '2']);
        Product_Feature::firstOrCreate(['id' => 5,'name' => 'Temperatua Máxima','description' => '60°c','product_id' => '2']);
        Product_Feature::firstOrCreate(['id' => 6,'name' => 'Longitudes','description' => '10" o 20"','product_id' => '2']);
        Product_Feature::firstOrCreate(['id' => 7,'name' => 'Construcion','description' => 'polipropileno FDA','product_id' => '2']);
        Product_Feature::firstOrCreate(['id' => 8,'name' => 'Conexión','description' => 'Roscada según norma NPT','product_id' => '2']);
        Product_Feature::firstOrCreate(['id' => 9,'name' => 'guarniciones','description' => 'Acrilo nitrilo o EPDM','product_id' => '2']);

        Product_Feature::firstOrCreate(['id' => 10,'name' => 'Certificado','description' => 'Por NSF 42 stándar','product_id' => '3']);
        Product_Feature::firstOrCreate(['id' => 11,'name' => 'Cumplimiento','description' => 'FDA','product_id' => '3']);
        Product_Feature::firstOrCreate(['id' => 12,'name' => 'ISO','description' => '9001','product_id' => '3']);
        Product_Feature::firstOrCreate(['id' => 13,'name' => 'Construcción','description' => 'polipropileno puro','product_id' => '3']);
        Product_Feature::firstOrCreate(['id' => 14,'name' => 'Temperatura máxima de trabajo','description' => '52°c','product_id' => '3']);
        Product_Feature::firstOrCreate(['id' => 15,'name' => 'Presión máxima de trabajo','description' => '20°c, 2kg/cm','product_id' => '3']);
        Product_Feature::firstOrCreate(['id' => 16,'name' => 'Caida de presión para recambio','description' => '2kg/cm2','product_id' => '3']);

        Product_Feature::firstOrCreate(['id' => 17,'name' => 'Elemento Filtrante','description' => 'AISI 304','product_id' => '4']);
        Product_Feature::firstOrCreate(['id' => 18,'name' => 'Junta tórica','description' => 'EPDM, Acrilo Nitrilo, etc.','product_id' => '4']);
        Product_Feature::firstOrCreate(['id' => 19,'name' => 'Caida de presoión recomendada','description' => '2kg/cm2','product_id' => '4']);
        Product_Feature::firstOrCreate(['id' => 20,'name' => 'Presión máxima de trabajo','description' => '20°c - 4kg/cm2','product_id' => '4']);
        Product_Feature::firstOrCreate(['id' => 20,'name' => 'Rango de temperatura','description' => '-10°C a + 90°C','product_id' => '4']);





    }
}
