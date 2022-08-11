<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shopping as Shoppings;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class Shopping extends Component
{
    public $orden, $order_product, $total_price_order, $total_money, $money, $data ,$search, $count_item, $sud_total,$direccion,$telefono,$retiro_sucursal,$envio_domicilio, $tipo_envio, $metodo_pago,$contado,$monto,$transferencia_bnc,$ref,$fecha_pago, $total; 
    
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
        $id = Auth::user()->id;
 
        
        $money = Product::select(DB::raw('SUM(shopping.order_quantity * products.price) As total'))
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', $id)
            ->get();

        
        $total_money=$money{0}{'total'}*0.21+$money{0}{'total'};
        /* dd($total_money); */
        

        $order_product =  Shoppings::select('shopping.product_id','shopping.price','shopping.order_quantity')
            ->where('shopping.user_id', '=', $id)
            ->get();        

        $this->validate([
             'direccion'      => 'required'
            
        ]);
        $orden=Order::create([
            'direccion'          => $this->direccion,
            'telefono'         => $this->telefono,
            'tipo_envio'         => $this->tipo_envio,
            'metodo_pago'       => $this->metodo_pago,
            'monto' => $this->monto,
            'ref' => $this->ref,
            'fecha_pago' => $this->fecha_pago,
            'user_id'=> $id,
            'total'=>$total_money,
            'status'=>'Iniciado'
        ]);

        foreach($order_product as $key => $ord_prod)
        {
	 //       dd($ord_prod);
            $total_price_order= $ord_prod->price*$ord_prod->order_quantity;
        
        OrderDetails::create([

            'order_id'=>$orden->id,
            'product_id'=>$ord_prod->product_id,
            'price'=>$ord_prod->price,
            'quantity'=>$ord_prod->order_quantity,
            'total'=>$total_price_order,

        ]);
    }
        //$this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        
        $this->resetInput();
        $this->reset_cart();
        return redirect()->back()->with('message', 'Orden Realizada Con Ezito...');
    }
    private function emitUpdates()
    {
        return redirect()->to('/shopping'); 

    }
    

}

