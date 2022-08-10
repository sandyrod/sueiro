<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class Orders extends Component
{
    public $data, $search, $user, $product, $order; 
    public function render()
    {
        $id = Auth::user()->id;       
        $this->data =  Order::where('user_id', $id)->get();
        return view('livewire.orders');
    }
}
