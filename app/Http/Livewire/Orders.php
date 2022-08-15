<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shopping;
use App\Models\Product;
use OrderDetail;

class Orders extends Component
{

    protected $listeners =['details'];

    public $data, $search, $user, $product, $order, $order_id, $orderDetails; 

    public function mount(){
        $this->orderDetails = Array();
    }
    public function render()
    {
        $id = Auth::user()->id;
        $this->data =  Order::where('user_id', $id)->orderBy('id', 'DESC')->get();
        
        
        return view('livewire.orders');
    }

    public function details($id){
        $this->order_id = $id;
        //dd($this->order_id);
        $this->orderDetails=OrderDetails::where('order_id', $this->order_id)->get();
        $this->render();
        //$this->orderDetails=OrderDetails::all();
        //dd($this->orderDetails);
    }

    public function recomprar($id){
        $id_user = Auth::user()->id;
        $order_product =  OrderDetails::select('order_details.product_id','order_details.price','order_details.quantity')
            ->where('order_details.id', '=', $id)
            ->get(); 
        /* dd($order_product); */

        $recompra = $this->orderDetails=OrderDetails::where('order_id', $this->order_id)->get();
            /* dd($recompra); */

        foreach($order_product as $key => $ord_prod)
        {   
            shopping::create([
                'product_id'         => $ord_prod->product_id,
                'user_id'            => $id_user,
                'order_number'       => '123',
                'order_quantity'     => $ord_prod->quantity,
                'price'              => $ord_prod->price,
                
            ]);
            return redirect()->back()->with('message', 'Producto agregado...!');
        }
    }
}
