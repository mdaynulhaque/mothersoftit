

@if(Session:: has('success'))
<div class="row">     
    <div class="col-md-6 m-auto">
        <div class="alert alert-success">
    <p>{{Session:: get('success')}}</p>
</div>
</div>
</div>


@endif

@if(Session:: has('error'))
<div class="row">
    <div class="col-md-8 m-auto">
       <div class="alert alert-danger ">
    <p>{{Session:: get('error')}}</p>
        </div> 
    </div>
</div>

@endif