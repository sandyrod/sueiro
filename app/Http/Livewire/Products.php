<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class Products extends Component
{
    public $data, $search, $product_id, $name, $description, $price, $logo, $request; 

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
                        ->orWhere('price', 'like', '%'.$this->search.'%')
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
        $this->name         = null;
        $this->description  = null;
        $this->emitUpdates();
        $this->inputActive  = false;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        if ($this->updateMode)
            return $this->update();

        return $this->store();
        if($request->hasFile("logo")){

            
            $imagen = $request->file("logo");
            $nombreimagen = Str::slug($request->logo).".".$imagen->guessExtension();
            $ruta = public_path("img/product/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $evt->logo = $nombreimagen;            
            
        }

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
            'logo'  => $this->logo,               

        ]);

        /* if($this->request->hasFile("logo")){
            
            $imagen = $this->request->file("logo");
            $nombreimagen = Str::slug($this->request->logo).".".$imagen->guessExtension();
            $ruta = public_path("img/product/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            
            $this->logo = $nombreimagen;            
        } */

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
