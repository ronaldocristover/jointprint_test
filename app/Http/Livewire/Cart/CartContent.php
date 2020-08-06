<?php

namespace App\Http\Livewire\Cart;

use App\DiscountCode;
use App\Order;
use Livewire\Component;

class CartContent extends Component
{
    public $orders = [];
    public $discountcode = '';
    public $codeerror = '';
    public $validcode  = true;
    public $total = 0;
    public $discount = 0;
    

    public function mount()
    {
        $this->init();
    }

    public function updatedDiscountcode()
    {
        $dc = DiscountCode::where('discount_code', $this->discountcode)->first();
        if($this->discountcode != ''){
            if(is_null($dc)){
                $this->validcode = false;
                $this->codeerror = 'Invalid Discount Code';
            }else{
                $this->validcode = true;
                $this->codeerror = "Valid! discount {$dc->discount_percentage}%" ;


                $subtotal = 0;
                foreach($this->orders as $order){
                    $subtotal += $order['subtotal'];
                }


                $this->discount = $subtotal * $dc->discount_percentage / 100 ;
            }
        }
    }

    public function updatedOrders()
    {
        $ret = [];
        foreach($this->orders as $order){
            $ret[] = [
                'id' => $order['id'],
                'product_id' => $order['product_id'],
                'qty' => $order['qty'],
                'price' => $order['price'],
                'subtotal' => ($order['qty'] * $order['price']),
                'discount' => $order['discount'],
                'product' => $order['product']
            ];
        }

        $this->orders = [];
        $this->orders = $ret;
    }

    public function init()
    {
        $data = Order::with('product')->latest()->get()->toArray();
        $ret = [];
        foreach($data as $order){
            $ret[] = [
                'id' => $order['id'],
                'product_id' => $order['product_id'],
                'qty' => $order['qty'],
                'price' => $order['price'],
                'subtotal' => $order['qty'] * $order['price'],
                'discount' => $order['discount'],
                'product' => $order['product']
            ];
        }
        $this->orders = $ret;
    }

    public function render()
    {
        return view('livewire.cart.cart-content');
    }

    public function deleteOrder($id)
    {
        Order::where('id', $id)->delete();
        $this->emit('updateCart');
        $this->init();
    }
}
