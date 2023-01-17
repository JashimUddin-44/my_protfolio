<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		@include('frontrand.partials.head')
	</head>
		<body>
		
		  <header id="header" id="home">
		  @if(request()->route()->getName()=='content.show')
		  @include('frontrand.partials.header')
          @endif
		     
		  </header><!-- #header -->
                
			<!-- start banner Area -->
			<!-- End banner Area -->
			@yield('content')
			<!-- End cta-two Area -->
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
			   @include('frontrand.partials.footer')
			</footer>	
			<!-- End footer Area -->	


			<script src="{{ asset('frontrand/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset('frontrand/js/vendor/bootstrap.min.js')}}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ asset('frontrand/js/easing.min.js')}}"></script>			
			<script src="{{ asset('frontrand/js/hoverIntent.js')}}"></script>
			<script src="{{ asset('frontrand/js/superfish.min.js')}}"></script>	
			<script src="{{ asset('frontrand/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{ asset('frontrand/js/jquery.magnific-popup.min.js')}}"></script>	
    		<script src="{{ asset('frontrand/js/jquery.tabs.min.js')}}"></script>						
			<script src="{{ asset('frontrand/js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{ asset('frontrand/js/owl.carousel.min.js')}}"></script>									
			<script src="{{ asset('frontrand/js/mail-script.js')}}"></script>
			<x:notify-messages />	
			<script src="{{ asset('frontrand/js/main.js')}}"></script>
			@notifyJs
		
				
		</body>
	</html>