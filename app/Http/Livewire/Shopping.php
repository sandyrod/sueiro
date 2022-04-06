<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Shopping as Shoppings;
use DB;



class Shopping extends Component
{
    public $data ,$search; 
    public function render()
    {
        
        $this->Title = "Shopping";
        $this->data =  Product::select('shopping.id','shopping.product_id','products.price','products.name',DB::raw('SUM(shopping.order_quantity) As revenue'))
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', '4')
            ->groupby('shopping.user_id')
            ->get();
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

