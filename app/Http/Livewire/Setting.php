<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\Settings;
use Livewire\Component;

class Setting extends Component
{
    public $dolar, $euro, $data; 
    
    public $updateMode  = false;
    public $imputActive = false;
 
    public function render()
    {
        $this->Title = "Setting";
        $this->data = Settings::find(1);
        return view('livewire.setting');
    }

    public function mount()
    {
        $this->Title    = "Precio";
        $this->dolar    = null;
        $this->euro     = null;
    }

    public function resetInput()
    {
        $this->dolar    = null;
        $this->euro     = null;
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
            'dolar'         => $this->dolar,
            'euro'          => $this->euro
        ]);

        return redirect()->back()->with('message', 'Registro Guardado con Exito...');
        $this->resetInput();
    }

    public function edit($id)
    {
        $record                     = settings::findOrFail($id);
        $this->setting_id          = $id;
        $this->dolar                 = $record->dolar;
        $this->euro          = $record->euro;
        $this->emitUpdates();

        $this->updateMode = true;
                
    }

    public function update()
    {
        $this->validate([
            'dolar'      => 'required',
            'euro'        => 'required',
        ]);
        if ($this->product_id) {
            $record = Product::find($this->product_id);
            $record->update([
                'dolar'      => $this->dolar,
                'euro'        => $this->euro,
            ]);
            
            return redirect()->back()->with('message', 'Registro actualizado...');
            $this->resetInput();
            $this->updateMode = false;
        }
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

}
