<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cotizador extends Component
{

    public $data, $search, $diametrodisco, $malla_metalica, $material, $ancho_malla;
    
    public $updateMode  = false;
    public $imputActive = false;

    public function render()
    {
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
