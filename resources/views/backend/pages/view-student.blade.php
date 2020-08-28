@extends('backend.layouts.master')


@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
    	<h3> Student Information</h3>
      <div class="card card-body">
          <table class="table table-bordered">
            <tr>
              <td class="font-weight-bold">Name</td><td>{{ $student->name }}</td>
              <td class="font-weight-bold">Father Name</td><td>{{ $student->fname }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Mother Name</td><td>{{ $student->mname }}</td>
              <td class="font-weight-bold">Present Address</td><td>{{ $student->preaddress }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Permanent Address</td><td>{{ $student->peraddress }}</td>
              <td class="font-weight-bold">Office Address</td><td>{{ $student->office }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">NID</td><td>{{ $student->nid }}</td>
              <td class="font-weight-bold">Occupation</td><td>{{ $student->occupation }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">dob</td><td>{{ $student->dob }}</td>
              <td class="font-weight-bold">Nationality</td><td>{{ $student->nation }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Blood Group</td><td>{{ $student->blood }}</td>
              <td class="font-weight-bold">Gender</td><td>{{ $student->gender }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Email</td><td>{{ $student->email }}</td>
              <td class="font-weight-bold">Mobile</td><td>{{ $student->phone }}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Guardian Phone</td><td>{{ $student->gphone }}</td>
              <td class="font-weight-bold">RelationShip</td><td>{{ $student->relationship }}</td>
            </tr>
            <tr><td></td></tr> 
             <th>Degree</th><th>School</th><th>Board</th><th>year</th><th>GPA</th></tr>
             <tr>
              <td>SSC</td><td>{{ $student->school1 }}</td><td>{{ $student->board1 }}</td><td>{{ $student->year1 }}</td><td>{{ $student->cgpa1 }}</td>
             </tr>
             <tr>
              <td>HSC/Diploma</td><td>{{ $student->school2 }}</td><td>{{ $student->board2 }}</td><td>{{ $student->year2 }}</td><td>{{ $student->cgpa2 }}</td>
             </tr>
             <tr>
              <td>Graduation</td><td>{{ $student->school3 }}</td><td>{{ $student->board3 }}</td><td>{{ $student->year3 }}</td><td>{{ $student->cgpa3 }}</td>
             </tr>
             <tr>
              <td>Post Gradution</td><td>{{ $student->school4 }}</td><td>{{ $student->board4 }}</td><td>{{ $student->year4 }}</td><td>{{ $student->cgpa4 }}</td>
             </tr>
             <tr><td></td></tr>

             <tr><td class="font-weight-bold">Reference Name:</td><td>{{ $student->rname }}</td><td class="font-weight-bold">Reference Number:</td><td >{{ $student->rnumber }}</td></tr>
              <tr><td class="font-weight-bold">Batch:</td><td >{{ $student->batch }}</td><td class="font-weight-bold">Reference ID:</td><td>{{ $student->rid }}</td>
                <td class="font-weight-bold">Reference Relation</td><td>{{ $student->rrelationship }}</td></tr>
          </table>
      </div>
    </div>
  </div>
  <!-- main-panel ends -->
@endsection
