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
		<!-- section title -->
		<div class="col-md-12">
			<div class="section-title">
			<h2 class="title">Our Product</h2>
			</div>
		</div>
		<!-- section title -->
		<livewire:product.list-product />
		</div>
			<!-- /Product Slick -->
		</div>
		<!-- /row -->

	</div>
	<!-- /container -->
</div>
<!-- /section -->
@endsection