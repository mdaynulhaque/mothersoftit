
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
		<div class="panel panel-default ">
			@php
				$categorys=App\Models\Cat::all();
			@endphp
			@foreach($categorys as $category)
			<div class="panel-heading">
				<h4 class="panel-title">
				<a  href="{{ route('product.category',$category->id) }}">
					{{ $category->name }}
				</a>
				</h4>
			</div>
			@endforeach
		</div>
		
		
		
		
		

		</div><!--/category-products-->
		
		
		<div class="shipping text-center"><!--shipping-->
		<img src="{{ asset('frontend/images/home/shipping.jpg') }}" alt="" />
		</div><!--/shipping-->
