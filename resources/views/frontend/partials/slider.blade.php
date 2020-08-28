<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" height="400">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($sliders as  $slider)
    <div class="carousel-item {{ $loop->index==0 ? 'active':''}}">
      <img src="{{ asset($slider->image) }}" class="d-block w-100" src="..." alt="First slide" height="500">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


{{-- 

<section id="slider" class="container mt-0" height="500" ><!--slider-->
<div id="mycarousel" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <ol class="carousel-indicators">
      <li data-slide-to="0" data-target="#mycarousel" class="active"></li>
      <li data-slide-to="1" data-target="#mycarousel" ></li>
      <li data-slide-to="2" data-target="#mycarousel" ></li>
    </ol>
    @foreach($sliders as  $slider)
    <div class="carousel-item {{ $loop->index==0 ? 'active':''}}">
      <div class="row">
        <div class="col-md-6">
          <div class="overlay" >
        <img src="{{ asset($slider->image) }}" class=" girl img-responsive animated zoomIn delay-1s"  alt="CP-GROUP"  height="400" style="width: 100%;" /></div>
        </div>

        <div class="col-md-6 ">
          <div class="carousel-caption mb-5 pb-5 text-right">
          <h2 style="font-size: 70px; font-weight: bold;color: green;font-family: Times New Roman;" class="display-4 animated lightSpeedIn delay-1s ">{{ $slider->title }}</h2>
          <h4 style=" font-weight: bold;color: black;font-family: Times New Roman;"  class="animated rotateInUpRight delay-1s">
          To pursue a highly challenging career in the IT
          industry and work closely </h4>
          
          <a href="#" class="btn btn-info animated rollIn delay-1s">Read more <i class="fa fa-arrow-right"></i></a>
        </div>
        </div>        
      </div>
    </div>
    @endforeach
    
    
  </div>
  
  <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
    <span class=""><i class="fa fa-angle-left text-dark" style="font-size: 40px; font-weight: bold;"></i></span>
  </a>
  <a href="#mycarousel" class="carousel-control-next" data-slide="next">
    <span ><i class="fa fa-angle-right text-dark" style="font-size: 40px; font-weight: bold;"></i></span>
  </a>
</div>
      
  

</section><!--/slider-->

 --}}