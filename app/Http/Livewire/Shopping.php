<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Shopping as Shoppings;
use DB;



class Shopping extends Component
{
    public $data ,$search, $count_item, $sud_total; 
    public function render()
    {
        
        $this->Title = "Shopping";
        $this->data =  Product::select('shopping.id','shopping.product_id','products.price','products.name','shopping.order_quantity')
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', '4')
            ->get();

        $this->count_item = Shoppings::select(DB::raw('SUM(shopping.order_quantity) As cantidad'))
            ->where('shopping.user_id','=',4)
            ->get();
            
        $this->sud_total = Product::select(DB::raw('SUM(shopping.order_quantity * products.price) As total'))
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', '4')
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
    private function emitUpdates()
    {
        return redirect()->to('/shopping'); 

    }
    

}

