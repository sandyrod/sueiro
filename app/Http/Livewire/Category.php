<?php

namespace App\Http\Livewire;

use App\Models\Category as Categorys;
use Livewire\Component;

class Category extends Component
{
    public $data, $search, $category_id, $name, $description;

    public $updateMode  = false;
    public $imputActive = false;


    public function category()
    {
        return view('category');
    }
    public function render()
    {
        $this->Title = "Categorias";
        $this->data = ($this->search)
                ? Categorys::where('id', 'like', '%'.$this->search.'%')
                        ->orWhere('name', 'like', '%'.$this->search.'%')
                        ->orWhere('description', 'like', '%'.$this->search.'%')
                        ->orderBy('id', 'DESC')
                        ->get()
                : Categorys::orderBy('id', 'DESC')->get();
        return view('livewire.category');
    }
    public function mount()
    {
        $this->Title = "Categorias";
        $this->name    = null;
        $this->description      = null;
    }

    public function resetInput()
    {
        $this->name    = null;
        $this->description = null;
        $this->category_id = null; 
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
        Categorys::create([
            'name'         => $this->name,
            'description'  => $this->description,
            'category_id'  => $this->category_id,
        ]);
        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        $this->resetInput();
    }

    public function edit($id)
    {
        $record                     = Categorys::findOrFail($id);
        $this->category_id          = $id;
        $this->name                 = $record->name;
        $this->description          = $record->description;
        $this->category_id          = $record->category_id;
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
        if ($this->category_id) {
            $record = Categorys::find($this->category_id);
            $record->update([
                'name'      => $this->name,
                'description'        => $this->description,
                'category_id'        => $this->category_id,
            ]);
            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro actualizado...']);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Categorys::find($id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
    }
    private function emitUpdates()
    {

    }
}
