<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::firstOrCreate(['id' => 1,'name' => 'Elementos filtrantes','category_id' => '0']);
            Category::firstOrCreate(['id' => 2,'name' => 'Mallas metálicas','category_id' => '1']);
                Category::firstOrCreate(['id' => 3,'name' => 'Lisas','category_id' => '2']);
                Category::firstOrCreate(['id' => 4,'name' => 'Reps','category_id' => '2']);
                Category::firstOrCreate(['id' => 5,'name' => 'Tricotada','category_id' => '2']);
                Category::firstOrCreate(['id' => 6,'name' => 'Artistica','category_id' => '2']);
            Category::firstOrCreate(['id' => 7,'name' => 'Chapa perforada ','category_id' => '1']);
            Category::firstOrCreate(['id' => 8,'name' => 'Metal desplegado','category_id' => '1']);  
            Category::firstOrCreate(['id' => 9,'name' => 'Sintéticos','category_id' => '1']);
                Category::firstOrCreate(['id' => 10,'name' => 'Poliester punzonado','category_id' => '9']);
                Category::firstOrCreate(['id' => 11,'name' => 'Micro fibra de vidrio','category_id' => '9']);
                Category::firstOrCreate(['id' => 12,'name' => 'Manta de fibra vidrio','category_id' => '9']);
        Category::firstOrCreate(['id' => 13,'name' => 'Filtros','category_id' => '0']);
            Category::firstOrCreate(['id' => 14,'name' => 'Tamices','category_id' => '13']);
                Category::firstOrCreate(['id' => 15,'Laboratorio' => 'Zarandas','category_id' => '14']);
                Category::firstOrCreate(['id' => 16,'Molineros' => 'Zarandas','category_id' => '14']);
            Category::firstOrCreate(['id' => 17,'name' => 'Zarandas','category_id' => '13']);
            Category::firstOrCreate(['id' => 18,'name' => 'Cartuchos','category_id' => '13']);
                Category::firstOrCreate(['id' => 19,'name' => 'Hidráulicos','category_id' => '18']);
                    Category::firstOrCreate(['id' => 20,'name' => 'CHL','description' => 'cartucho hidráulico liso', 'category_id' => '19']);
                    Category::firstOrCreate(['id' => 21,'name' => 'CHP','description' => 'cartucho hidráulico plisado', 'category_id' => '19']);
                    Category::firstOrCreate(['id' => 22,'name' => 'CHP-R','description' => 'cartucho hidráulico plisado roscado', 'category_id' => '19']);
                    Category::firstOrCreate(['id' => 23,'name' => 'CTFP','description' => 'cartucho termofundido polipropileno', 'category_id' => '19']);
                    Category::firstOrCreate(['id' => 24,'name' => 'CACT','description' => 'cartucho hidráulico carbón activado', 'category_id' => '19']);
                Category::firstOrCreate(['id' => 25,'name' => 'Coalescentes','category_id' => '18']);
            Category::firstOrCreate(['id' => 26,'name' => 'Mangas','category_id' => '13']);        
            Category::firstOrCreate(['id' => 27,'name' => 'Bolsas','category_id' => '13']);
            Category::firstOrCreate(['id' => 28,'name' => 'Trampas magnéticas','category_id' => '13']);
            Category::firstOrCreate(['id' => 29,'name' => 'Demister','category_id' => '13']);
            Category::firstOrCreate(['id' => 30,'name' => 'Temporarios','category_id' => '13']);
                Category::firstOrCreate(['id' => 31,'name' => 'Cónicos','category_id' => '30']);
                Category::firstOrCreate(['id' => 32,'name' => 'Tronco-cónicos','category_id' => '30']);
            Category::firstOrCreate(['id' => 33,'name' => 'Discos','category_id' => '13']);
                Category::firstOrCreate(['id' => 34,'name' => 'Simples','category_id' => '33']);
                Category::firstOrCreate(['id' => 35,'name' => 'Packs','category_id' => '33']);
            Category::firstOrCreate(['id' => 36,'name' => 'Canastos','category_id' => '13']);
                Category::firstOrCreate(['id' => 37,'name' => 'Brida superior plana','category_id' => '36']);
                Category::firstOrCreate(['id' => 38,'name' => 'Brida superior 45°','category_id' => '36']);
            Category::firstOrCreate(['id' => 39,'name' => 'Cribas','category_id' => '13']);
            Category::firstOrCreate(['id' => 40,'name' => 'Placas','category_id' => '13']);
        Category::firstOrCreate(['id' => 41,'name' => 'Porta filtros','category_id' => '0']);
            Category::firstOrCreate(['id' => 42,'name' => 'Carcasa plástica','category_id' => '41']);
                Category::firstOrCreate(['id' => 43,'name' => 'CPP','category_id' => '42']);
                Category::firstOrCreate(['id' => 44,'name' => 'CAC','category_id' => '42']);    
        Category::firstOrCreate(['id' => 45,'name' => 'Máquinas','category_id' => '0']);
            Category::firstOrCreate(['id' => 46,'name' => 'Tamizadora de laboratorio ','category_id' => '45']);
            Category::firstOrCreate(['id' => 47,'name' => 'Tamizadora horizontal ','category_id' => '45']);
            Category::firstOrCreate(['id' => 48,'name' => 'Tamizadora circular','category_id' => '45']);
            Category::firstOrCreate(['id' => 49,'name' => 'Tamizadora circular móvil','category_id' => '45']);

    }
}
