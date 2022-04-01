<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;



class Shopping extends Component
{
    public $data ,$search; 
    public function render()
    {
        $this->data = ($this->search)
                ? Product::select('shopping.id','shopping.product_id','products.price','shopping.order_quantity')
                ->join('shopping', 'products.id', '=', 'product.id')
                        ->get()
                : product::orderBy('id', 'DESC')->get();
        return view('livewire.shopping');
    
    
    }





    /* public function shoppingadd(Request $request){
        dd($request);
        
        $cart  = Product::find($request->id);
        Shopping::add(
            $cart->id,
            $cart->name,
            $cart->price,
            1,
        array("urlfoto"=>$curso->urlfoto,"slug"=>$curso->slug)
        ); 
    } */
    public function shoppingadd($id){
        dd($id);
        
       /*  $cart  = Product::find($request->product_id);
        Product::add(
            $cart->product_id,
            $cart->name,
            $cart->price,
            1,
        array("urlfoto"=>$curso->urlfoto,"slug"=>$curso->slug)
        );
        return back()->with('succes',"$producto->nombre !se ha agregado con exito!"); */
    }

}

