@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated zoomInLeft delay 2s">Graphics Design</h2>
					</div>
				</div>
			</div>
		</div>
</section>

{{-- about explIN  --}}
<section class="app">
	<div class="container py-4">
		<div class="row">
			<div class="col">
				<h3>Graphics Design </h3>
				<p class="text-muted">Graphic design is the process of visual communication and problem-solving through the use of typography, photography, iconography and illustration. The field is considered a subset of visual communication and communication design, but sometimes the term "graphic design" is used synonymously. Graphic designers create and combine symbols, images and text to form visual representations of ideas and messages.

				They use typography, visual arts, and page layout techniques to create visual compositions. Common applications of graphic design include corporate design (logos and branding), editorial design (magazines, newspapers and books), wayfinding or environmental design, advertising, web design, communication design, product packaging, and signage.  </p>
				<img src="{{ asset('frontend/images/slider/graphics.jpg') }}" class="w-100 ">
				<h4>Learning Area:</h4>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PSD Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Business Card Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T-Shirt Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cup Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Portfolio Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Background Remove</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adobe Illustrator</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adobe PhotoShop</li>
				
				

				<p class="my-3" >  Price: 8000 -/ BTD</p>
				<p class="my-3" >  Total Class:30 Days</p>
				<p class="my-3" >  Total Hours: 90 hours</p>
			</div>
		</div>
	</div>
</section>

@endsection