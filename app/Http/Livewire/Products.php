<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $data, $search, $product_id, $name, $description;

    public $updateMode  = false;
    public $imputActive = false;


    public function product()
    {
        return view('product');
    }
    public function render()
    {
        $this->Title = "Productos";
        $this->data = ($this->search)
                ? product::where('id', 'like', '%'.$this->search.'%')
                        ->orWhere('name', 'like', '%'.$this->search.'%')
                        ->orWhere('description', 'like', '%'.$this->search.'%')
                        ->orderBy('id', 'DESC')
                        ->get()
                : product::orderBy('id', 'DESC')->get();
            return view('livewire.products');
    }
    public function mount()
    {
        $this->Title = "Productos";
        $this->name    = null;
        $this->description      = null;
    }

    public function resetInput()
    {
        $this->name    = null;
        $this->description = null;
        $this->emitUpdates();
    }

    public function save()
    {
        if ($this->updateMode)
            return $this->update();

        return $this->store();
    }

    public function store()
    {
        $this->validate([
            'name'   => 'required',
            'description'   => 'required'

        ]);
        Product::create([
            'name'         => $this->name,
            'description'  => $this->description,
        ]);
        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        $this->resetInput();
    }

    public function edit($id)
    {
        $record                     = Product::findOrFail($id);
        $this->product_id          = $id;
        $this->name                 = $record->name;
        $this->description          = $record->description;
        $this->emitUpdates();

        $this->updateMode = true;

        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro cargado...']);
    }

    public function update()
    {
        $this->validate([
            'name'      => 'required',
            'description'        => 'required',
        ]);
        if ($this->product_id) {
            $record = Product::find($this->product_id);
            $record->update([
                'name'      => $this->name,
                'description'        => $this->description,
            ]);
            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro actualizado...']);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Product::find($id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
    }
    private function emitUpdates()
    {

    }
}
