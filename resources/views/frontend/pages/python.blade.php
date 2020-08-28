@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated zoomInRight delay 2s">Django Framework With Python</h2>
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
				<h3>Django Framework </h3>
				<p class="text-muted">Django  is a Python-based free and open-source web framework that follows the model-view-controller (MVC) architectural pattern. It is maintained by the Django Software Foundation (DSF), an American independent organization established as a 501(c)(3) non-profit.

				Django's primary goal is to ease the creation of complex, database-driven websites. The framework emphasizes reusability and "pluggability" of components, less code, low coupling, rapid development, and the principle of don't repeat yourself. Python is used throughout, even for settings files and data models. Django also provides an optional administrative create, read, update and delete interface that is generated dynamically through introspection and configured via admin models.  </p>

				<img src="{{ asset('frontend/images/slider/python.png') }}" class="w-100 py-3">
				<h4>Learning Area:</h4>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Introduction Of Django</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Python Programming</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PostgreSQL or My SQL</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rest API</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Django Framework</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Django Project</li>
				

				<p class="my-3" >  Price: 12000 -/ BTD</p>
				<p class="my-3" >  Total Class:30 Days</p>
				<p class="my-3" >  Total Hours: 90 hours</p>
			</div>
		</div>
	</div>
</section>

@endsection