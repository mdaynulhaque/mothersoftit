@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated zoomInRight delay 2s">Our  Portfolio </h2>
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
				
				<div class="row">
					@foreach($portfolios as $portfolio)
					<div class="col-md-4 mb-3">
						<div class="card card-body ">
							<div class="image">
								<img src="{{$portfolio->image }}" height="300">
								<h5>{{$portfolio->title }}</h5>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<div class="continer">
	<div class="row">
		<div class="col-md-6 m-auto">
			<div class="pagination mt-5">
				{{$portfolios->Links()}}
			</div>
		</div>
	</div>
</div>

@endsection