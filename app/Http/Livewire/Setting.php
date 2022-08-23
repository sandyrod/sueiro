<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\Settings;
use Livewire\Component;
use Illuminate\Support\MessageBag;

class Setting extends Component
{
    public $dolar, $euro, $costo_referencia, $activacion, $data; 
    
    public $updateMode  = false;
    public $imputActive = false;
 
    public function render()
    {
        $this->Title    = "Setting";
        $this->data     = Settings::find(1);
        return view('livewire.setting');
    }

    public function mount()
    {
        $this->Title                = "Precio";
        $this->dolar                = null;
        $this->euro                 = null;
        
        $this->activacion            = null;
    }

    public function resetInput()
    {
        $this->dolar                = null;
        $this->euro                 = null;
        $this->costo_referencia     = null;
        
        $this->emitUpdates();
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        //if ($this->updateMode)
        //    return $this->update();

        return $this->store();
    }


    public function store()
    {
    
        Settings::create([
            'dolar'                     => $this->dolar,
            'euro'                      => $this->euro,
            'costo_referencia'          => $this->costo_referencia,
            'activacion'                 => $this->activacion
        ]);

        return redirect()->back()->with('message', 'Registro Guardado con Exito...');
        $this->resetInput();
    }

    public function edit()
    {
        $record                          = settings::findOrFail(1);
        $this->setting_id                = 1;
        $this->dolar                     = $record->dolar;
        $this->euro                      = $record->euro;
        $this->costo_referencia          = $record->costo_referencia;
        $this->activacion                 = $record->activacion;
       // $this->emitUpdates();

        $this->updateMode = true;
                
    }

    public function update()
    {
        $this->validate([
            'dolar'      => 'required',
            
        ]);
           $record = settings::find(1);
            $record->update([
                'dolar'                   => $this->dolar,
                'euro'                    => $this->euro,
                'costo_referencia'        => $this->costo_referencia,
                'activacion'               => $this->activacion,
            ]);
            
            return redirect('/setting')->back()->with('message', 'Registro actualizado...');
            $this->emitUpdates();
            $this->updateMode = false;
        
    }

    public function destroy($id)
    {
        if ($id) {
            $record = settings::find($id);
            $record->delete();

            ///$this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            return redirect()->back()->with('message', 'Registro eliminado...');
            $this->resetInput();
        }
    }
    private function emitUpdates()
    {
        return redirect()->to('/home'); 

    }

}
