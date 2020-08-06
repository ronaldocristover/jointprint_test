@extends('layouts.index')

@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product Slick -->
            <div class="row">
                <div class="col-md-12">
                    <div class="order-summary clearfix">
                        <div class="section-title">
                            <h3 class="title">My Cart</h3>
                        </div>
                            <livewire:cart.cart-content />
                        <div class="pull-right">
                            <button class="primary-btn">Place Order</button>
                        </div>
                    </div>

                </div>
                </div>
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection