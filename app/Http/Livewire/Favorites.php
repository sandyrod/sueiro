<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Shopping;
use App\Models\Favorites as Favorite;

class Favorites extends Component
{
    public $data, $search, $user, $product_id, $order_quantity ; 
    
    public function render()
    {
        $id = Auth::user()->id;
        $this->Title = "favorites";
        $this->data =  Product::select('favorites.id','favorites.product_id','products.price','products.name')
            ->join('favorites', 'products.id', '=', 'favorites.product_id')
            ->where('favorites.user_id', '=', $id)
            ->get();
        return view('livewire.favorites');
    }

    public function resetInput()
    {
        $this->order_quantity = null;   
    }
    


    public function addToCart(int $product_id): void
    {
        
        $price =  product::find($product_id);


         $user_id = Auth::user()->id;
         $order_quantity  =  $this->order_quantity ;

        
         $this->validate([
            'order_quantity' => 'required|min:1'
            
        ]);
        $this->resetInput();
          //dd($price->price);
          $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro cargado...']);
        
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

    public function destroy($id)
    {
        if ($id) {
            $record = Favorite::find($id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
    }

}
