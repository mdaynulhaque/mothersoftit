@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated fadeInLeft delay 2s">Android Application Development With Java</h2>
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
				<h3>Android Application </h3>
				<p class="text-muted">This Specialization enables learners to successfully apply core Java programming languages features & software patterns needed to develop maintainable mobile apps comprised of core Android components, as well as fundamental Java I/O & persistence mechanisms.

				The Capstone project will integrate the material from throughout the Specialization to exercise and assess the ability of learners to create an interesting Android app by applying knowledge and skills learned in previous MOOCs, including Java programming features, Android Studio tools, Android Activity components, Material Design, file I/O and data persistence, unit testing, and software patterns. The project itself will be similar in design goals to previous assignments, however it will provide less of the skeleton code than earlier MOOCs provide to enable more creativity to learners and greater opportunity for learners to customize the app. </p>
				<img src="{{ asset('frontend/images/slider/app.png') }}" class="w-100 ">
				<h4>Learning Area:</h4>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Android Studio</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java Programming</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Learning about Play Store</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Apps Marketing</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XML Design</li>
				<li class="text-muted my-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Google Adsense</li>
				

				<p class="my-3" >  Price: 10000 -/ BTD</p>
				<p class="my-3" >  Total Class:30 Days</p>
				<p class="my-3" >  Total Hours: 90 hours</p>
			</div>
		</div>
	</div>
</section>

@endsection