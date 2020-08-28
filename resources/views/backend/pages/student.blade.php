@extends('backend.layouts.master')

@section('page-css')

    <link rel="stylesheet" href="{{ asset('common/datatables/css/1.10.20.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/datatables/css/2.2.3.responsive.bootstrap4.min.css') }}">

@endsection


@section('content')
<!-- File export table -->
<section id="file-export">
  <div class="row">
    <div class="col-12">
      <div class="card">
         <form id="frm-example" method="get">
        <div class="card-header">
         <div class="row">
           <div class="col-md-6">
             <h4 class="">DISPLAY ALL REGISTER STUDENT</h4>
           </div>

           <div class="col-md-6">

           

           </div>
         </div>

        </div>
          <div class="card-body card-dashboard table-responsive">
            <div class="table-responsive">
              <div class="card-content">

           <br />

              <table class="table table-bordered table-striped " id="JsDataTable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Mobile NO:</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Mobile NO:</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </tfoot>

              </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- File export table -->








{{-- Modal start here --}}
<div id="formModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog  modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Insert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body p-3">
         <span id="form_result"></span>
         <form  id="sample_form" class="form-horizontal" method="post" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="updateId" id="updateId">

           <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Name: </span> <p id="name" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Father Name:</span> <p id="fname" class="h5 d-inline-block"></p>
             </div>          
            </div>

            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Present Addres: </span> <p id="preaddress" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Mother Name:</span> <p id="mname" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Permanent Addres: </span> <p id="peraddress" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Office:</span> <p id="office" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">NID: </span> <p id="nid" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Occupation:</span> <p id="occupation" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">DOB: </span> <p id="dob" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Nationality:</span> <p id="nation" class="h5 d-inline-block"></p>
             </div>          
            </div>
             <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Blood Group: </span> <p id="blood" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Gender:</span> <p id="gender" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Email: </span> <p id="email" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Phone:</span> <p id="phone" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Guardian Phone: </span> <p id="gphone" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Reference Name:</span> <p id="rname" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Reference Number: </span> <p id="rnumber" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Batch:</span> <p id="batch" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Reference ID: </span> <p id="rid" class="h5 d-inline-block"></p>
             </div>
             <div class="col-md-6">
                <span class="h5 font-weight-bold d-inline-block">Reference Relation:</span> <p id="rrelationship" class="h5 d-inline-block"></p>
             </div>          
            </div>
            <div class="row">
              <div class="col">
                <table class="table table-bordered">
                  <thead class="bg-dark text-light">
                    <tr>
                      <th>Degree</th><th>School</th><th>board</th><th>Year</th><th>CGPA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>SSC</td><td id="school1"></td><td id="board1"></td><td id="year1"></td><td id="cgpa1"></td>
                    </tr>
                    <tr>
                      <td>HSC/Dip</td><td id="school2"></td><td id="board2"></td><td id="year2"></td><td id="cgpa2"></td>
                    </tr>
                    <tr>
                      <td>Graduation</td><td id="school3"></td><td id="board3"></td><td id="year3"></td><td id="cgpa3"></td>
                    </tr>
                    <tr>
                      <td>POST Grad</td><td id="school4"></td><td id="board4"></td><td id="year4"></td><td id="cgpa4"></td>
                    </tr>
                  </tbody>
                </table>
              </div>          
            </div>




        </div>

        </div>
        <div class="modal-fotter">
         <div class="row">
           <div class="col-md-10">
              <div class="form-group">
              <input type="hidden" name="action" id="action"/>
              <input type="hidden" name="hidden_id" id="hidden_id" />
              <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-block ml-3 " value="Add" />
             </div>
           </div>
           <div class="col-md-2">
             <input type="button" data-dismiss="modal" name="cancel" value="Close" class="btn btn-warning">
           </div>
         </div>
        </div>
        </form>
     </div>
    </div>
</div>
{{-- Product add modal end --}}



@endsection




@section('page-js')

    {{-- DataTable --}}
    <script src="{{ asset('common/datatables/js/1.10.20.jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('common/datatables/js/1.10.20.dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('common/datatables/js/2.2.3.dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('common/datatables/js/2.2.3.responsive.bootstrap4.min.js') }}" type="text/javascript"></script>

    <!-- Modal Show-->
    <script src="{{ asset('app-assets/js/components-modal.min.js') }}" type="text/javascript" ></script>



<script>

$(document).ready(function(){

  // Show data in page
   var table= $('#JsDataTable').DataTable({
    language: {
        processing: '<i class="fa fa-refresh fa-spin fa-3x fa-fw green"></i><span class="sr-only">Loading...</span> '},
    processing: true,
    serverSide: true,
    pagingType: "full_numbers",
    stateSave: true,

    ajax:{
    url: "{{ route('student') }}",
    },
      columns:[

            {
                data: 'name',
                name: 'name',
            },
            {
                data: 'fname',
                name: 'fname',
            },
            {
                data: 'phone',
                name: 'phone',
            },
            {
                data: 'email',
                name: 'email',
            },

            {
                data: 'action',
                name: 'action',
                orderable: false,
                "searchable": false
            }
        ],

  });


// insert button id here
$('#create_record').click(function(){


    $('#sample_form')[0].reset();
    $('#preview1').attr("src","");
    $('#form_result').html("");
    $('.modal-title').text("Add New Record");

    $('#action_button').val("Add");
    $('#action').val("Add");
    $('#formModal').modal('show');
 });
// end  button id here



       

//start edit modal from here
$(document).on('click', '.view', function(){
 id = $(this).attr('id');
  $.ajax({
   url:"studentall/"+id,
   dataType:"json",
   success:function(data){

    $('#name').text(data.name);
    $('#fname').text(data.fname);
    $('#mname').text(data.mname);
    $('#preaddress').text(data.preaddressperaddress);
    $('#peraddress').text(data.peraddress);
    $('#office').text(data.office);
    $('#nid').text(data.nid);
    $('#occupation').text(data.occupation);
    $('#dob').text(data.dob);
    $('#nation').text(data.nation);
    $('#blood').text(data.blood);
    $('#gender').text(data.gender);
    $('#email').text(data.email);
    $('#phone').text(data.phone);
    $('#gphone').text(data.gphone);
    $('#relationship').text(data.relationship);
    $('#school1').text(data.school1);
    $('#school2').text(data.school2);
    $('#school3').text(data.school3);
    $('#school4').text(data.school4);
    $('#board1').text(data.board1);
    $('#board2').text(data.board2);
    $('#board3').text(data.board3);
    $('#board4').text(data.board4);
    $('#year1').text(data.year1);
    $('#year2').text(data.year2);
    $('#year3').text(data.year3);
    $('#year4').text(data.year4);
    $('#cgpa1').text(data.cgpa1);
    $('#cgpa2').text(data.cgpa2);
    $('#cgpa3').text(data.cgpa3);
    $('#cgpa4').text(data.cgpa4);
    $('#rname').text(data.rname);
    $('#rnumber').text(data.rnumber);
    $('#batch').text(data.batch);
    $('#rid').text(data.rid);
    $('#rrelationship').text(data.rrelationship);
   


    $('#hidden_id').val(data.id);
    $('.modal-title').text("View  Record");
    $('#action_button').val("Edit");
    $('#action').val("Edit");
    $('#formModal').modal('show');
   }
  })
 });




});




</script>

 @endsection
