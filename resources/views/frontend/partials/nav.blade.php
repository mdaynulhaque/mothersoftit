<header id="header" class=""><!--header-->
<div class="header_top "><!--header_top-->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="contactinfo">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-phone"></i>&nbsp; #+8801746628271</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i>&nbsp; mrmasud205@gmail.com</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="social-icons pull-right">
        <ul class="nav">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div> <div class="col-sm-4">
      <div class="social-icons pull-right">
        <ul class="nav navbar-nav">
           <li style="margin-top: 2px;">
          <form class="form-inline my-lg-0" method="get" action="">
            <div class="input-group ">
              <input type="text" class="form-control form-control-sm" placeholder="Search here" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </li>        
      </ul>
      </div>
    </div>
  </div>
</div>
</div><!--/header_top-->


{{-- nav --}}
<nav class="navbar navbar-light  navbar-expand-md p-3 pb-0 "  uk-sticky="top:100; animation; uk-animation-slide-top; botttom:sticky-on-scroll-up">
  <div class="container">
     <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt="CP GROUP"  height="40" width="150" /></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarnav">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>

    <div id="navbarnav" class="mainmenu pull-left collapse navbar-collapse " >
     <ul class="nav navbar-nav ml-auto">
          <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}" >Home</a></li>

          <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About US</a>
          </li>

          <li class="dropdown"><a href="#" class="{{ Request::is('ui') ? 'active' : '' }}">Courses<i class="fa fa-angle-down"></i></a>
          <ul role="menu" class="sub-menu">
            <li><a href="{{ route('ui') }}" class="{{ Request::is('ui') ? 'active' : '' }}"> Advanced UI/UX Design</a></li>
            <li><a class="{{ Request::is('ccna') ? 'active' : '' }}" href="{{ route('ccna') }}"> CCNA</a></li>

            <li><a class="{{ Request::is('ccnp') ? 'active' : '' }}" href="{{ route('ccnp') }}"> CCNP</a></li>

            <li><a class="{{ Request::is('design') ? 'active' : '' }}" href="{{ route('design') }}"> Web design and Development</a></li>

            <li><a class="{{ Request::is('digital') ? 'active' : '' }}" href="{{ route('digital') }}"> Digital Marketing </a></li>

            <li><a class="{{ Request::is('app') ? 'active' : '' }}" href="{{ route('app') }}"> Android Application With Java </a></li>

            <li><a class="{{ Request::is('python') ? 'active' : '' }}" href="{{ route('python') }}"> Django with Python </a></li>

            <li><a class="{{ Request::is('graphics') ? 'active' : '' }}" href="{{ route('graphics') }}"> Graphics Design</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="{{ Request::is('portfolio') ? 'active' : '' }}" href="#">Portfolio<i class="fa fa-angle-down"></i></a>
          <ul role="menu" class="sub-menu">
            <li><a class="{{ Request::is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}"> Portfolio</a></li>
            <li><a class="{{ Request::is('client') ? 'active' : '' }}" href="{{ route('client') }}"> Our Clients</a></li>
          </ul>
        </li> 

        <li class="dropdown"><a href="#">Admission<i class="fa fa-angle-down"></i></a>
          <ul role="menu" class="sub-menu">
            <li><a class="{{ Request::is('admission') ? 'active' : '' }}" href="{{ route('admission') }}"> Admission</a></li>
            <li><a class="{{ Request::is('process') ? 'active' : '' }}" href="{{ route('process') }}"> Admission Procedure</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="{{ Request::is('recent') ? 'active' : '' }}" href="#">Students<i class="fa fa-angle-down"></i></a>
          <ul role="menu" class="sub-menu">
            <li><a class="{{ Request::is('recent') ? 'active' : '' }}" href="{{ route('recent') }}"> Recent Success</a></li>
            <li><a class="{{ Request::is('story') ? 'active' : '' }}" href="{{ route('story') }}"> Student Preview</a></li>
          </ul>
        </li>

      
        <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
      
    </ul>
      
    </div>
  </div>
</nav>
<hr class="bg-light mb-0 mt-0" style="height: 2px;">

