<li class="header-cart dropdown default-dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <div class="header-btns-icon">
            <i class="fa fa-shopping-cart"></i>
            <span class="qty">{{ $total }}</span>
        </div>
        <strong class="text-uppercase">My Cart:</strong>
        <br>
        <span>{{ $totalAmount }}</span>
    </a>
    <div class="custom-menu">
        <div id="shopping-cart">
            <div class="shopping-cart-list">
                @foreach ($orders as $o)
                <div class="product product-widget">
                    <div class="product-thumb">
                        <img src="./{{ $o['product']['image'] }}" alt="">
                    </div>
                    <div class="product-body">
                    <h3 class="product-price">$ {{ number_format($o['product']['price']) }} <span class="qty"> x {{ $o['qty'] }}</span></h3>
                        <h2 class="product-name"><a href="#">{{ $o['product']['name'] }}</a></h2>
                    </div>
                    <button type="button" class="cancel-btn" wire:click="deleteCartProduct({{$o['id']}})" ><i class="fa fa-trash"></i></button>
                </div> 
                @endforeach
            </div>
            <div class="shopping-cart-btns">
                <button class="main-btn" wire:click="viewCart">View Cart</button>
            </div>
        </div>
    </div>
</li>