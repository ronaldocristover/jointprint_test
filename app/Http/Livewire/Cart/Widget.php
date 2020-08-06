<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Product;
use App\Order;

class Widget extends Component
{
    public $orders = [];
    public $total = 0;
    public $totalAmount = 0;

    public $listeners = ['updateCart'];


    public function updateCart(){
        $this->total = 0;
        $this->totalAmount = 0;
        $this->orders = [];
        $this->init();
    }

    public function mount()
    {
       $this->init();
    }

    public function init(){
        $cartOrder = Order::with('product')->get()->toArray();

        $this->orders = $cartOrder;
        $this->totalAmount = number_format(Order::sum('price'));
        $this->total = number_format(Order::count());
    }

    public function render()
    {
        return view('livewire.cart.widget');
    }

    public function deleteCartProduct($id)
    {
        $order = Order::find($id)->delete();    
        $this->init();
    }

    public function viewCart()
    {
        return redirect('cart');
    }
}
