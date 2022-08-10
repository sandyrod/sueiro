<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Order;
use App\Models\Shopping as Shoppings;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class Shopping extends Component
{
    public $data ,$search, $count_item, $sud_total,$direccion,$telefono,$retiro_sucursal,$envio_domicilio,$contado,$monto,$transferencia_bnc,$ref,$fecha; 
    
    public $updateMode  = false;
    public $imputActive = false;
 
    
    public function render()

    
    {
        $id = Auth::user()->id;       
        $this->Title = "Shopping";
        $this->data =  Product::select('shopping.id','shopping.product_id','products.price','products.name','shopping.order_quantity')
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', $id)
            ->get();

        $this->count_item = Shoppings::select(DB::raw('SUM(shopping.order_quantity) As cantidad'))
            ->where('shopping.user_id','=', $id)
            ->get();
            
        $this->sud_total = Product::select(DB::raw('SUM(shopping.order_quantity * products.price) As total'))
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', $id)
            ->get();

            return view('livewire.shopping');
    }
    public function resetInput()
    {
        $this->emitUpdates();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Shoppings::find($id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
    }
    public function reset_cart()
    {
        $id = Auth::user()->id;
        if ($id) {
            $record = Shoppings::where('shopping.user_id', '=', $id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
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
    }




    public function store()
    {
        $this->validate([
     /*        'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'company'   => 'required'
 */
        ]);
        Order::create([
            'direccion'          => $this->direccion,
            'telefono'         => $this->telefono,
            'retiro_sucursal'         => $this->retiro_sucursal,
            'envio_domicilio'     => $this->envio_domicilio,
            'contado'       => $this->contado,
            'monto' => $this->monto,
            'transferencia_bnc'    => $this->transferencia_bnc,
            'ref' => $this->ref,
            'fecha' => $this->fecha,
        ]);
        $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        $this->resetInput();
    }
    private function emitUpdates()
    {
        return redirect()->to('/shopping'); 

    }
    

}

