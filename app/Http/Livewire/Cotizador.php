<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class Cotizador extends Component
{

    public $data, $search, $diametrodisco, $malla_metalica, $material, $ancho_malla, $vlr_mtr_cuadrado;
    
    public $updateMode  = false;
    public $imputActive = false;

    public function mount()
    {
        // $response = Http::withHeaders([
        //     'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        // ])->get('https://tiendas.axoft.com/api/Aperture/Product?&pageSize=500&pageNumber=1');

        // $data = $response->json();
        // //print_r($data['Data']);
        // foreach($data['Data'] as $producto){
        //     $product = Product::where('skufield',$producto['SKUCode'])->first();
        //     if ($product !== null ){
        //         $product->update(['name' => $producto['Description'],
        //                 'description' => $producto['AdditionalDescription']]);
        //     }else{
        //         $sku = $producto['SKUCode'];
        //         echo $sku."<br>";
        //         $product = Product::create(
        //                 [
        //                 'name' => $producto['Description'],
        //                 'description' => $producto['AdditionalDescription'],
        //                 'skufield' => $sku
        //             ]);
        //     }
        // }
    }

    public function render()
    {
        $this->material = Product::where('skufield','like','01%')->get();
        return view('livewire.cotizador');
    }
    public function resetInput()
    {
        
        $this->tipo                         = null;

        $this->cant_solicitada              = null;
        $this->malla_metalica               = null;
        $this->ancho_malla                  = null;
        $this->material                     = null;
        $this->cant_pack                    = null;
        $this->vlr_mtr_cuadrado             = null;
        $this->redondeo_por_tiras           = null;
        $this->redondeo_de_tiras            = null;
        $this->de                           = null;
        $this->nd                           = null;
        $this->alambre                      = null;
        $this->modulos                      = null;
        $this->abertura                     = null;
        $this->peso_m2                      = null;
        $this->aa                           = null;
        $this->emitUpdates();
        $this->inputActive                  = false;
    }
}
