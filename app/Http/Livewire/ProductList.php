<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $data, $search, $product_id, $name, $description;
    public function render()
    {
        $this->Title = "Productos";
        $this->data = ($this->search)
                ? product::where('id', 'like', '%'.$this->search.'%')
                        ->orWhere('name', 'like', '%'.$this->search.'%')
                        ->orWhere('description', 'like', '%'.$this->search.'%')
                        ->orderBy('id', 'DESC')
                        ->get()
                : product::orderBy('id', 'DESC')->get();
        return view('livewire.product-list');
    }
}
