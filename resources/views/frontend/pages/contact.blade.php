@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated fadeInLeft delay 2s">Contact With  our company</h2>
					</div>
				</div>
			</div>
		</div>
</section>

{{-- about explIN  --}}
<section class="py-5">
	<div class="container py-4 text-muted">
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col-md-6">
						<p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.<br><br>

						Please be patient while waiting for response. (24/7 Support!) Phone General Inquiries:<b> #+8801746628271,</b>
						</p>
						<div class="mt-5 card card-body">
							Fill UP this Form and Send  a Message to us
							<hr>
							<form action="{{ route('contact.store') }}" method="post">
								@csrf
								 <div class="form-group">
								    <label for="exampleInputEmail1">Name</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail11">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail111">Subject</label>
								    <input type="text" class="form-control" id="exampleInputEmail111" aria-describedby="emailHelp" placeholder="Enter Subject" name="subject">
								  </div>
								   <div class="form-group">
								    <label for="">Message</label>
								    <textarea class="form-control" placeholder="Enter Your Message" name="message"></textarea>
								  </div>
								  
								  <button type="submit" class="btn btn-warning ">Submit <i class="fa fa-angle-right"></i></button>
							</form>
						</div>
											
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-warning text-light">
								<h3 class="">Company Address</h3>
							</div>
							<div class="card-body">
								<h5>MptherSoft-IT</h5>
								<p>RH Home Center, Suite #528, 74/B/1, Green Road, Farmget, Dhaka-1215.</p>
								<p><i class="fa fa-phone"></i> #+8801746628271</p>
								<p><i class="fa fa-envelope"></i> mrmasud205@gmail.com</p>
								
							</div>
						</div>
							<iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Dhaka+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="w-100 mt-5" height="400" frameborder="0"></iframe> <a href='https://www.symptoma.de/de/info/covid-19'>Coronavirus Symptome</a> <script type='text/javascript' src='https://maps-generator.com/google-maps-authorization/script.js?id=15d817cd111c07986e415b216b7102628957be7a'></script>
						<div class="w-100">
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection