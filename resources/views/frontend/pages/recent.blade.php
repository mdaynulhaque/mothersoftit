@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated bounceInRight delay 2s">Our Recent Successor In Freelancing </h2>
					</div>
				</div>
			</div>
		</div>
</section>

{{-- about explIN  --}}
<section class="py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col">
				<h3 class="p-2 bg-warning text-light">Recent Successor in Fiver</h3>

				<div class="row">
					@foreach($freelaces as $freelace)
					<div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded ">
						<img src="{{ asset($freelace->image) }}">
					</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</section>

@endsection