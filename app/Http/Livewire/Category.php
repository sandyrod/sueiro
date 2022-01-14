<?php

namespace App\Http\Livewire;

use App\Models\Category as Categorys;
use Livewire\Component;

class Category extends Component
{
    public $data, $search, $category_id, $category, $sud_category;

    public $updateMode = false;
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
                        ->orWhere('category', 'like', '%'.$this->search.'%')
                        ->orWhere('sud_category', 'like', '%'.$this->search.'%')
                        ->orderBy('id', 'DESC')
                        ->get()
                : Categorys::orderBy('id', 'DESC')->get();
        return view('livewire.category');
    }
    public function mount()
    {
        $this->Title = "Categorias";
        $this->category    = null;
        $this->sud_category = null;
    }

    public function resetInput()
    {
        $this->category    = null;
        $this->sud_category = null;
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
            'category'   => 'required',
            'sud_category'   => 'required',
            'hours'   => 'required'
        ]);
        Categorys::create([
            'category'     => $this->name,
            'sud_category'  => $this->part,
        ]);
        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        $this->resetInput();
    }

    public function edit($id)
    {
        $record             = Categorys::findOrFail($id);
        $this->category_id   = $id;
        $this->category         = $record->category;
        $this->sud_category         = $record->sud_category;
        $this->emitUpdates();

        $this->updateMode = true;

        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro cargado...']);
    }

    public function update()
    {
        $this->validate([
            'category'   => 'required',
            'sud_category'   => 'required',
        ]);
        if ($this->category_id) {
            $record = Categorys::find($this->machine_id);
            $record->update([
                'category'      => $this->category,
                'sud_category'      => $this->sud_category,
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
