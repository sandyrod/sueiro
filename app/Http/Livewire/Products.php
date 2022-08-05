<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Shopping;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//use App\Helpers\shopping;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;




class Products extends Component
{
    public $data, $search, $user, $product_id, $order_quantity, $name, $description, $price, $logo, $request, $cart; 

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
                : product::where('price', '>','0')->orderBy('id', 'DESC')->get();
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

//        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
return redirect()->back()->with('message', 'Registro Guardado con Exito...');
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
            
            return redirect()->back()->with('message', 'Registro actualizado...');
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Product::find($id);
            $record->delete();

            ///$this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            return redirect()->back()->with('message', 'Registro eliminado...');
            $this->resetInput();
        }
    }

    public function addToCart(int $product_id): void
    {
        
        $price =  product::find($product_id);


         $user_id = Auth::user()->id;
         $order_quantity  =  $this->order_quantity ;

        
         $this->validate([
            'order_quantity' => 'required|min:1'
            
        ]);
          //dd($price->price);
        
        shopping::create([
            'product_id'         => $product_id,
            'user_id'            => $user_id,
            'order_number'       => '123',
            'order_quantity'     => $order_quantity,
            'price'              => $price->price,
        
        ]);
        
        
        
        
        //dd($product_id);
        //  shopping::add(Product::where('id', $product_id)->first());
        //  $this->emit('productAdded');
    }
   
    private function emitUpdates()
    {

    }
}
