  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('common/bootstrap-4.4.1/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="{{ asset('frontend/js/price-range.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{ asset('frontend/js/main.js')}}"></script>
 
 <script src="{{ asset('common/sweet-alert-2/sw-alert.js') }}" type="text/javascript"></script>



     {{-- Toastar Alert --}}
     <script type="text/javascript">

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
</script>
<script type="text/javascript">
  $('.count').counterUp({
    delay:10,
    time:3000
  })
</script>
<script>
  $(function(){
        var nav=$('nav');
      
        var h=200;
        $(window).scroll(function(){
          if($(this).scrollTop()>h)
          {
            nav.addClass('sticky-top');
          }
          else
          {
            nav.removeClass('sticky-top');
          }
        });
      });
</script>

<script>
  

// var waypoint = new Waypoint({
//   element: document.getElementById('px-offset-waypoint'),
//   handler: function(direction) {
//     notify('I am 20px from the top of the window')
//   },
//   offset: 20 
// })


$(document).ready(function(){
  
  $('.f_1').waypoint(function(direction){
    $('.f_1').addClass('animated fadeInDown')
    },{
    offset:'70%'
  })

  $('.f_2').waypoint(function(direction){
    $('.f_2').addClass('animated fadeInDown')
    },{
    offset:'70%'
  })

  $('.f_3').waypoint(function(direction){
    $('.f_3').addClass('animated fadeInDown')
    },{
    offset:'70%'
  })

  $('.f_4').waypoint(function(direction){
    $('.f_4').addClass('animated fadeInDown')
    },{
    offset:'70%'
  })

  $('.f_5').waypoint(function(direction){
    $('.f_5').addClass('animated fadeInUp')
    },{
    offset:'70%'
  })

  $('.f_6').waypoint(function(direction){
    $('.f_6').addClass('animated fadeInDown')
    },{
    offset:'70%'
  })

  $('.f_7').waypoint(function(direction){
    $('.f_7').addClass('animated fadeInUp')
    },{
    offset:'70%'
  })

});



</script>

