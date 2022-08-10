<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use OrderDetail;

class Orders extends Component
{

    protected $listeners =['details'];

    public $data, $search, $user, $product, $order, $order_id, $orderDetails; 
    public function render()
    {
        $id = Auth::user()->id;
        $this->data =  Order::where('user_id', $id)->orderBy('id', 'DESC')->get();
        $this->orderDetails = OrderDetails::where('order_id', 1)->get();
        return view('livewire.orders');
    }

    public function details($id){
        $this->order_id = $id;
        //dd($this->order_id);
        $this->orderDetails=OrderDetails::where('order_id', $this->order_id)->get();
        //$this->orderDetails=OrderDetails::all();
        //dd($this->orderDetails);
    }
}
