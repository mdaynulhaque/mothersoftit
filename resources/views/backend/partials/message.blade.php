@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
    	 <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

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
    <div class="col-md-6 m-auto">
       <div class="alert alert-danger ">
    <p>{{Session:: get('erors')}}</p>
        </div> 
    </div>
</div>

@endif