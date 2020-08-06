<div>
    <table class="shopping-cart-table table">
        <thead>
            <tr>
                <th>Product</th>
                <th></th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Total</th>
                <th class="text-right"></th>
            </tr>
        </thead>
        <tbody>
            @php $subtotal = 0; @endphp
            @if(count($orders) > 0)
                @for ($i = 0; $i < count($orders); $i++)
                    @php $subtotal += $orders[$i]['subtotal'] @endphp
                    <tr>
                        <td class="thumb"><img src="./{{ $orders[$i]['product']['image'] }}" alt=""></td>
                        <td class="details">
                            <a href="#">{{$orders[$i]['product']['name']}}</a>
                        </td>
                        <td class="price text-center"><strong>$ {{number_format($orders[$i]['product']['price'])}}</strong></td>
                        <td class="qty text-center">
                            <input class="input" type="number" wire:model="orders.{{$i}}.qty">
                        </td>
                        <td class="total text-center">
                            <strong class="primary-color">{{ number_format($orders[$i]['subtotal'])}}</strong>
                        </td>
                        <td class="text-right"><button class="main-btn icon-btn" wire:click='deleteOrder({{$orders[$i]['id']}})'><i class="fa fa-close"></i></button></td>
                    </tr>
                @endfor
            @else
                <tr>
                    <td colspan="6" class="text-center">No Data</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th class="empty" colspan="3"></th>
                <th>SUBTOTAL</th>
                <th colspan="2" class="sub-total">${{ number_format($subtotal) }}</th>
            </tr>

            <tr>
                <th class="empty" colspan="3"></th>
                <th>Discount Code</th>
                <th colspan="2" class="sub-total">
                    <input type="text" class="input" wire:model="discountcode">
                    @if(!$validcode)
                        <small class="text-muted text-danger">
                            {{$codeerror}}
                        </small>
                    @else
                        @if($discountcode!== '')
                        <small class="text-muted text-success">
                            {{$codeerror}}
                        </small>
                        @endif
                    @endif
                    
                </th>
            </tr>
            <tr>
                <th class="empty" colspan="3"></th>
                <th>DISCOUNT</th>
                <th colspan="2" class="total">{{number_format($discount)}}</th>
            </tr>
            <tr>
                <th class="empty" colspan="3"></th>
                <th>TOTAL</th>
                <th colspan="2" class="total">{{ number_format($subtotal - $discount) }}</th>
            </tr>
        </tfoot>
    </table>
</div>
<style>
    .text-danger{
        color: red;
    }
</style>