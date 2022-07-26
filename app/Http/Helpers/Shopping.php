<?php


namespace App\http\Helpers;


use App\Models\Product;

class Shopping
{
    public function __construct()
    {
        if($this->get() === null)
            $this->set($this->empty());
    }

    public function add(Product $product): void
    {
        $shopping = $this->get();
        $shoppingProductsIds = array_column($shopping['products'], 'id');
        $product->amount = !empty($product->amount) ? $product->amount : 1;

        if (in_array($product->id, $shoppingProductsIds)) {
            $shopping['products'] = $this->productShoppingIncrement($product->id, $shopping['products']);
            $this->set($shopping);
            return;
        }

        array_push($shopping['products'], $product);
        $this->set($shopping);
    }

    public function remove(int $productId): void
    {
        $shopping = $this->get();
        array_splice($shopping['products'], array_search($productId, array_column($shopping['products'], 'id')), 1);
        $this->set($shopping);
    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'products' => [],
        ];
    }

    public function get(): ?array
    {
        return request()->session()->get('shopping');
    }

    private function set($shopping): void
    {
        request()->session()->put('shopping', $shopping);
    }

    private function productShoppingIncrement($productId, $shoppingItems)
    {
        $amount = 1;
        $shoppingItems = array_map(function ($item) use ($productId, $amount) {
            if ($productId == $item['id']) {
                $item['amount'] += $amount;
                $item['price'] += $item['price'];
            }

            return $item;
        }, $shoppingItems);

        return $shoppingItems;
    }
}
