<div>
    <!-- Product Single -->
    @foreach($products as $product)
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="product product-single">
        <div class="product-thumb">
            <img src="./img/product01.jpg" alt="">
        </div>
        <div class="product-body">
            <h3 class="product-price">$ {{ number_format($product['price']) }}</h3>
            <h2 class="product-name"><a href="#">{{ $product['name'] }}</a></h2>
            <div class="product-btns">
            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
            <button type="button" class="primary-btn add-to-cart" wire:click="addCart({{$product['id']}})" ><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
        </div>
    </div>
    <!-- /Product Single -->
    @endforeach
</div>