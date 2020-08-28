@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated fadeInRight delay 2s">Get  Admission </h2>
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
				<h2 class="text-muted mb-4">PERSONAL & CONTACT INFORMATION</h2>
				<form action="{{ route('student.store') }}" method="post">@csrf
					 <div class="form-group">
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Student Name" required="" name="name">
					  </div>

					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Father Name" required="" name="fname">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Mother Name" required="" name="mname">
					  		</div>
					  	</div>
					  </div>

					  <div class="form-group">
					    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Present Addres " required="" name="preaddress">
					  </div>
					   <div class="form-group">
					    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Permanent Addres " required="" name="peraddress">
					  </div>

					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Office Addres (If applicable)" name="office">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="NID Number" required="" name="nid">
					  		</div>
					  	</div>
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Occupation" required="" name="occupation">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="date" class="form-control" id="" aria-describedby="emailHelp"  required="" name="dob" required="">
					  		</div>
					  	</div>
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		 <select class="form-control text-muted" name="nation" required="">
					    		 	<option selected disabled>Nationality</option>
					    		 	<option value="Bangladeshi" >Bangladeshi</option>
					    		 	<option value="Other Country">Other Country</option>
					    		 </select>
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="row">
					  			<div class="col-md-6">
					  				<div class="form-group">
							    		<select class="form-control text-muted" name="blood" required="">
							    		 	<option selected disabled>Blood Group</option>
							    		 	<option value="A+">A+</option>
							    		 	<option value="A-">A-</option>
							    		 	<option value="AB+">AB+</option>
							    		 	<option value="AB-">AB-</option>
							    		 	<option value="B+">B+</option>
							    		 	<option value="B-">B-</option>
							    		 	<option value="O+">O+</option>
							    		 	<option value="O-">O-</option>
							    		 </select>
							  		</div>
					  			</div>
					  			<div class="col-md-6">
					  				<div class="form-group">
					    		 <select class="form-control text-muted" name="gender" required="">
					    		 	<option selected disabled>Gender</option>
					    		 	<option value="Male" >Male</option>
					    		 	<option value="Female">Female</option>
					    		 </select>
					  		</div>
								  </div>
					  		</div>
					  	</div>
					  </div>

					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Email" required="" name="email">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="number" class="form-control" id="" aria-describedby="emailHelp"  placeholder="Phone Number" required="" name="phone">
					  		</div>
					  	</div>
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Gurdians Phone Number" required="" name="gphone">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp"  placeholder="Relationship with the Gurdians" required="" name="relationship">
					  		</div>
					  	</div>
					  </div>
					  <h3 class="text-muted mb-4">Educational Background</h3>
					  <table class="table table-bordered">   
					  	<thead class="bg-dark text-light">
					  		<tr>
					  			<th>Degree</th>
						  		<th>School/Collage/University</th>
						  		<th>Board</th>
						  		<th>Passing year</th>
						  		<th>Result</th>
					  		</tr>
					  	</thead>
					  	<tbody>
					  		<tr>
					  			<td>SSC/O level</td>
					  			<td><input type="text" name="school1" style="border: none" required=""></td>
					  			<td><input type="text" name="board1" style="border: none" required=""></td>
					  			<td><input type="text" name="year1" style="border: none" required=""></td>
					  			<td><input type="text" name="cgpa1" style="border: none" required=""></td>
					  		</tr>
					  		<tr>
					  			<td>HSC/Diploma</td>
					  			<td><input type="text" name="school2" style="border: none"></td>
					  			<td><input type="text" name="board2" style="border: none"></td>
					  			<td><input type="text" name="year2" style="border: none"></td>
					  			<td><input type="text" name="cgpa2" style="border: none"></td>
					  		</tr><tr>
					  			<td>Graduation</td>
					  			<td><input type="text" name="school3" style="border: none"></td>
					  			<td><input type="text" name="board3" style="border: none"></td>
					  			<td><input type="text" name="year3" style="border: none"></td>
					  			<td><input type="text" name="cgpa3" style="border: none"></td>
					  		</tr><tr>
					  			<td>Post Graduation</td>
					  			<td><input type="text" name="school4" style="border: none"></td>
					  			<td><input type="text" name="board4" style="border: none"></td>
					  			<td><input type="text" name="year4" style="border: none"></td>
					  			<td><input type="text" name="cgpa4" style="border: none"></td>
					  		</tr>
					  	</tbody>
					  </table>
					  
					  <h3 class="text-muted mb-4">Reference Details</h3>
					   <div class="form-group">
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Reference Name" required="" name="rname">
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Phone Number" required="" name="rnumber">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp"  placeholder="Batch" required="" name="batch">
					  		</div>
					  	</div>
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="id" required="" name="rid">
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<input type="text" class="form-control" id="" aria-describedby="emailHelp"  placeholder="Relationship with the Student" required="" name="rrelationship">
					  		</div>
					  	</div>
					  </div>

					  <button type="submit" class="btn btn-warning" name="submit">Submit <i class="fa fa-angle-right"></i></button>
				</form>

			</div>
		</div>
	</div>
</section>

@endsection