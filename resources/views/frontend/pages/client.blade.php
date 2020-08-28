@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated fadeInLeft delay 2s">Our Clients </h2>
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
				<h3 class="p-2 bg-warning">Our Team Members</h3>
				<div class="row">
					<div class="col-md-3 con1">
						<div class="card">
							<div class="card-body">
								<img src="{{ asset('frontend/images/team/team-mem-1.png') }}" height="300" class="image1">
								<div class="overlay1">Mr.Monjurur Rahman</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 con1">
						<div class="card">
							<div class="card-body">
								<img src="{{ asset('frontend/images/team/team-mem-2.png') }}" height="300" class="image1">
								<div class="overlay1">Mrs.Naima Khan</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 con1">
						<div class="card">
							<div class="card-body">
								<img src="{{ asset('frontend/images/team/team-mem-3.png') }}" height="300" class="image1">
								<div class="overlay1">Mr.Hamidur Rahman</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 con1">
						<div class="card">
							<div class="card-body">
								<img src="{{ asset('frontend/images/team/team-mem-4.png') }}" height="300" class="image1">
								<div class="overlay1">Mr.Naimur Rahman</div>

							</div>
						</div>
					</div>
				</div>
				<h3 class="p-2 bg-warning mt-3">Our Clients </h3>
				<div class="row">
					<div class="col  text-center">
						<img src="{{ asset('frontend/images/partner/partner-logo-1.png') }}" height="200" width="200" class="image1 d-inline-block">
						<img src="{{ asset('frontend/images/partner/partner-logo-2.png') }}" height="200" width="200" class="image1 d-inline-block">
						<img src="{{ asset('frontend/images/partner/partner-logo-3.png') }}" height="200" width="200" class="image1 d-inline-block">
						<img src="{{ asset('frontend/images/partner/partner-logo-4.png') }}" height="200" width="200" class="image1 d-inline-block">
						<img src="{{ asset('frontend/images/partner/partner-logo-5.png') }}" height="200" width="200" class="image1 d-inline-block">
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection