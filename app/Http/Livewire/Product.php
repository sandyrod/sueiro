<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function render()
    {
        return view('livewire.product');
    }
}
