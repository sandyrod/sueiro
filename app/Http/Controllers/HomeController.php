<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function category()
    {
        return view('category');
    }

    public function product()
    {
        return view('product');
    }

    public function products()
    {
        return view('products');
    }

    public function remittances()
    {
        return view('remittances');
    }

    public function order_history()
    {
        return view('order-history');
    }

    public function quality()
    {
        return view('quality');
    }

    public function shopping()
    {
        return view('shopping');
    }
    public function purchase_history()
    {
        return view('purchase-history');
    }
    public function favorites()
    {
        return view('favorites');
    }
    public function cotizador()
    {
        return view('cotizador');
    }

    public function api(){
        $response = Http::withHeaders([
            'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        ])->get('https://tiendas.axoft.com/api/Aperture/Product?&pageSize=500&pageNumber=1');

        $data = $response->json();
        //print_r($data['Data']);
        foreach($data['Data'] as $producto){
            $product = Product::where('skufield',$producto['SKUCode'])->first();
            if ($product !== null ){
                $product->update(['name' => $producto['Description'],
                        'description' => $producto['AdditionalDescription']]);
            }else{
                $sku = $producto['SKUCode'];
                echo $sku."<br>";
                $product = Product::create(
                        [
                        'name' => $producto['Description'],
                        'description' => $producto['AdditionalDescription'],
                        'skufield' => $sku
                    ]);
            }
        }
    }
    public function price(){
        $response = Http::withHeaders([
            'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        ])->get('https://tiendas.axoft.com/api/Aperture/Price?&pageSize=500&pageNumber=1');
        $data = $response->json();
        //print_r($data['Data']);
        foreach($data['Data'] as $producto){
            $product = Product::where('skufield',$producto['SKUCode'])->first();
            if ($product !== null ){
                $product->update(['price' => $producto['Price']]);
            }
        }
    }

}
