@extends('backend.layouts.master')


@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
    	<h3>All Contact Information</h3>
      <div class="card card-body">
 <section id="column">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered dom-jQuery-events">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $contact)
               		<tr>
               			<td>{{ $contact->name }}</td>
               			<td>{{ $contact->email }}</td>
               			<td>{{ $contact->subject }} </td>
               			<td>{{ $contact->message }}</td>
               		</tr>
               	@endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        
      </div>
    </div>
  </div>
  <!-- main-panel ends -->
@endsection
