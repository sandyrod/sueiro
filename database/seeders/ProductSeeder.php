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

        Product::firstOrCreate(['id' => 2,'name' => 'CPP','description' => 'Las carcasas serie CPP de alta durabilidad están disponibles 10" y 20" de largo. Tienen excelente resistencia química y son destinadas para aplicaciones residenciales e industria liviana y media. Poseen una conexión roscada NPT en el cabezal de ingreso y egreso co-lineal y tambien cuentan con una válvula manual de alivio de presión. Los productos de esta linea pueden utilizarse en sistemas de osmosis inversa, como en tratamiento de aguas, sistemas de riego, refrigeración, etc.']);

        Product::firstOrCreate(['id' => 3,'name' => 'CTFP','description' => 'Los cartuchos de polipropileno termofundidos son construidos con multiples capas de profundidad y fabricados por proceso de soplado por fusión tienen una construcción de densidad creciente, que captura las particulas a lo largo de toda la sección transversal del cartucho y reduce la superficie de saturación']);
        
        Product::firstOrCreate(['id' => 4,'name' => 'CHL','description' => 'Este tipo de cartucho están construidos integramente en acero inoxidable. Están destinados a la filtración de sólidos en liquidos con un rango de retención entre 10 a 200 micrones y son sellados mediante una junta tórica de sección circular para lograr una segregación más eficiente. Estos cartuchos pueden ser aplicados en funcionamientos criticos de mediana presión, con capacidad de soportar elevadas presiones diferenciales. Están construidos para el sentido de flujo se out-in   ']);






    }
}
