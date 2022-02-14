<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Requestmodel;

class Request extends Component
{
    public $data, $search, $name, $email, $phone, $product, $extradata, $company;

    public $updateMode  = false;
    public $imputActive = false;

    public function render()
    {

        $this->Title = "Presupuesto";
        $this->data = ($this->search)
                ? Requestmodel::where('id', 'like', '%'.$this->search.'%')
                        ->orWhere('name', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%')
                        ->orWhere('phone', 'like', '%'.$this->search.'%')
                        ->orWhere('company', 'like', '%'.$this->search.'%')
                        ->orderBy('id', 'DESC')
                        ->get()
                : Requestmodel::orderBy('id', 'DESC')->get();
     
                return view('livewire.request');
    }

    public function resetInput()
    {
        $this->name         = null;
        $this->extradata    = null;
        $this->email        = null;
        $this->company      = null;
        //$this->emitUpdates();
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
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'company'   => 'required'

        ]);
        Requestmodel::create([
            'name'          => $this->name,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'extradata'     => $this->extradata,
            'company'       => $this->company,
            'product_id'    => $this->product
        ]);
        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        $this->resetInput();
    }

    public function update()
    {
        $this->validate([
            'name'      => 'required',
            'email'     => 'required',
            'phone' => 'required',
            'company'   => 'required',
        ]);
        if ($this->budgetrequest_id) {
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
}
