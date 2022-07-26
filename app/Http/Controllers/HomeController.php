<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
