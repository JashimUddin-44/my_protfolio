
<div class="header-top">
    
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                           @auth 
                           <button class="btn btn-dark">{{auth()->user()->name}}</button>
                          <a href="{{route('user.logout')}}" class="btn btn-success"><span class="lnr lnr-phone-handset"></span><span class="text">Logout</span></a>
                          
                          @else
						  <button type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#registration">
						  Registration
                        </button>
                        	
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
						  Login
                        </button>
                        @endguest
			  				
			  			</div>
                        

			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="{{ asset('frontrand/img/logo.png')}}" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{route('content.show')}}">Home</a></li>
			          <li><a href="{{route('about.show')}}">About</a></li>
			          <li><a href="{{route('contact.show')}}">Contact</a></li>
			          <li><a href="{{route('notice.show')}}">Notice</a></li> 
			          <li><a href="{{route('gellery.show')}}">Gallery</a></li>
			          <li><a href="{{route('student.fee')}}">Fee Payment</a></li>
			          <li><a href="{{route('result.show')}}">Result</a></li>		          					          		          
			          
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 m-auto">
            <div class="button_main">
                <button class="all_text">All</button>
                <form action="{{route('search')}}" method="get">
                <input type="text" class="Enter_text" placeholder="Enter keywords" name="search_key">
                <button class="search_text">Search</button>
                </form>
                </div>
            </div>
            </div>

<!-- modal start		 -->
<div class="modal fade show" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Login Here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('user.login')}}" method="post">
            @csrf
                <div class="modal-body">
                <div class="form-group">
                    <label for="email"><h1 class="text-primary">Enter Customer Email:</h1></label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter User Email">
                </div>

                <div class="form-group">
                    <label for="password"><h1 class="text-primary">Enter Customer Password:</h1></label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Enter User Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">User Login</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- {{--Registration--}} -->
<div class="modal fade" id="registration"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('register.store')}}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="name"><h1 class="text-primary">Enter User Name:</h1></label>
                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="email"><h1 class="text-primary">Enter User Email:</h1></label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter User Email">
                </div>
                <div class="form-group">
                    <label for="password"><h1 class="text-primary">Enter User Password:</h1></label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Enter User password">
                </div>

				<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>	


		<!-- modal end		 -->
