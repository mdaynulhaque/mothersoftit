@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated zoomInRight delay 2s">Our Student Comment Preview </h2>
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
				<h3 class="p-2 bg-warning">Preview of Your Future</h3>
				@foreach($fivers as $fiver)
				<div class="row  shadow-lg p-3 mb-5 bg-white rounded">
				  <div class="col-md-8"> 
				  	<img src="{{ asset($fiver->image) }}">
				  </div>
				  <div class="col-md-4"> 
				  	<p class="text-muted">{{ $fiver->message }} </p>
				  </div>

				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<div class="continer">
	<div class="row">
		<div class="col-md-6 m-auto">
			<div class="pagination mt-5">
				{{$fivers->Links()}}
			</div>
		</div>
	</div>
</div>
@endsection