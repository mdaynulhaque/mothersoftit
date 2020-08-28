@extends('frontend.layouts.master')

@section('content')
<section>
	@include('Frontend.partials.slider')
</section>

<section class="py-5 bg-light">
	<div class="container">
		<div class="row">
			 <div class="col f_5">
			 	<h3 class="text-muted text-center">Welcome to <span class="text-danger">MotherSoft IT</span> Where IT Leaders are Created</h3>
			 	<br>
			 	<p class="text-muted h5">MotherSoft IT, one of the leading IT training IT in Bangladesh offers the best training opportunities. It has been playing a vital role to eradicate the unemployment problem since 2009. Enriched with quality training this IT has never failed to help the individuals to reveal their talents making harmony between creativity and IT. No matter what is your background, we are offering 30 courses for you conducted by experienced trainers to advance your skills. </p>

			 	<br>
			 	<p class="text-muted h5">
			 		MSIT has tremendously well-decorated two campuses with upgraded equipment. Our students are very much happy with our culture, environment and outstanding training method. We are passionate about providing good service to our students. Thus, the students of this IT institute turn out to be successful marketers and establish their careers in various companies as well. We dedicatedly provide flexible training options such as online training, 24/7 support, lifetime post-training support, job placement and so on. We always maintain the standards of excellence which are visible on Facebook Reviews and Google Reviews. 
			 	</p>
			 </div>
		</div>
	</div>
</section>

<section>
	<div class="container py-4">
		 <div class="row">
		 	<div class="col-md-12">
		 		<img class="w-100" src="{{ asset('frontend/images/slider/1.jpg') }}">
		 	</div>
		 </div>
	</div>
</section>
<section class="header-extraDiv mt-3 py-5 bg-light">
			<div class="container text-muted">
				<div class="row shadow p-3 mb-5 bg-white rounded f_6">
					<div class="extradiv col-md-4">
						<a href="{{ route('ui') }}"><i class="fa fa-3x  fa-desktop text-center text-warning"></i></a>
						<h2>Web Design</h2>
						<p>User experience design (UXD) is the process of enhancing customer satisfaction and loyalty by improving the usability, ease of use, and pleasure provided in the interaction between the customer and the product. </p>
					</div>
					<div class="extradiv col-md-4">
						<a href="{{ route('design') }}"><i class="fa fa-3x fa-trophy text-center text-warning"></i></a>
						<h2>Web Development</h2>
						<p>Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static ......</p>
					</div>
					<div class="extradiv col-md-4">
						<a href="{{ route('digital') }}"><i class="fa fa-3x fa-magic text-center text-warning"></i></a>
						<h2>Digital Marketing</h2>
						<p>Digital marketing is the component of marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones and other digital media and ..... </p>
					</div>
				</div>

				<div class="row shadow p-3 mb-5 bg-white rounded f_7">
					<div class="extradiv col-md-4">
						<a href="{{ route('app') }}"><i class="fa fa-3x  fa-android  text-center text-warning"></i></a>
						<h2>Android Apps</h2>
						<p>This Specialization enables learners to successfully apply core Java programming languages features & software patterns needed to develop maintainable mobile apps comprised of core Android components..... </p>
					</div>
					<div class="extradiv col-md-4">
						<a href="{{ route('python') }}"><i class="fa fa-3x fa-globe text-center text-warning"></i></a>
						<h2>Django Framework</h2>
						<p>Django is a Python-based free and open-source web framework that follows the model-view-controller (MVC) architectural pattern. It is maintained by the Django Software..... </p>
					</div>
					<div class="extradiv col-md-4">
						<a href="{{ route('graphics') }}"><i class="fa fa-3x fa-bar-chart text-center text-warning"></i></a>
						<h2>Graphics Design</h2>
						<p>Graphic design is the process of visual communication and problem-solving through the use of typography, photography, iconography and illustration......</p>
					</div>
				</div>
			</div>
		</section>


		<!-- project work -->
		<section class="project-work">
			<div class="container  text-center">
				<p>MORE THEN 2,000 WEBSITES CREATED</p>
			</div>
			<div class="container d-flex justify-content-around align-items-center text-warning">
				<div>
					<h1 class="count">1000</h1>
					<p>CMS Installation</p>
				</div>
				<div>
					<h1 class="count">100</h1>
					<p>Awars Won</p>
				</div>
				<div>
					<h1 class="count">1300</h1>
					<p>Happy Clients</p>
				</div>
				<div>
					<h1 class="count">100</h1>
					<p>Working On</p>
				</div>
			</div>
		</section>

		<!-- price offer -->
<section class="start" >
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col text-light">
						<h1 class="text-uppercase mt-5 font-weight-bold  text-right">We Are With You Every Step Get Started Easily.</h1><br>
						<p class="text-uppercase  text-right">Make your Website Faster, Safer & Better Support.</p>
						<a href="" class="btn btn-warning btn-lg text-uppercase mt-4 text-muted float-right">Get Started Now <li class="fa fa-angle-right"></li></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


