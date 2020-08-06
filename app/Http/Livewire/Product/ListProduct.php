<?php

namespace App\Http\Livewire\Product;

use App\Order;
use App\Product;
use Livewire\Component;

class ListProduct extends Component
{
    public $products = [];

    public function mount()
    {
        $products = Product::get()->toArray();
        $this->products = $products;
    }
    public function render()
    {
        return view('livewire.product.list-product');
    }

    public function addCart($id)
    {
        $product =  Product::where('id',$id)->first();
        Order::updateOrCreate(
            ['product_id' => $id],
            ['qty' => 1, 'discount' => 0, 'price' => $product->price]
        );
        $this->emit('updateCart');
    }
}
