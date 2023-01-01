@extends('frontrand.partials.index')
@section('content')

<section class="search-course-area relative">
			<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Get reduced fee <br>
								during this Summer!
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Expert Instructors</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							@if(Session::has('success'))
							<p class="alert alert-primary">{{Session::get('success')}}</p>
							@endif
							<form class="form-wrap" action="{{route('Admission.update',$admissionEdit->id)}}" method="post" enctype="multipart/form-data">
								@csrf
								@method('PUT')
							<h3 class="text-white pb-20 text-center mb-30">Students Admission From Here</h3>	
							<div class="form-group">
									<label for="name"><h3 class="text-white">Student Name</h3></label>
									<input type="text" name="student_name" value="{{$admissionEdit->student_name}}" class="form-control" placeholder="Enter Your Name">
									<div>
										@error('student_name')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<label for="father_name"><h3 class="text-white">father Name</h3></label>
									<input type="text" name="father_name" value="{{$admissionEdit->father_name}}" class="form-control" placeholder="Enter Your Father Name">
									<div>
										@error('father_name')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<label for="mother_name"><h3 class="text-white">Mother Name</h3></label>
									<input type="text" name="mother_name" value="{{$admissionEdit->mother_name}}" class="form-control" placeholder="Enter Your Mother Name">
									<div>
										@error('mother_name')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<label for="mobaile_number"><h3 class="text-white">Mobaile</h3></label>
									<input type="number" name="mobaile_number" value="{{$admissionEdit->mobaile_number}}" class="form-control" placeholder="Enter Your Mobaile Number">
									<div>
										@error('mobaile_number')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<label for="email"><h3 class="text-white">Student Email Address</h3></label>
									<input type="email" name="email" value="{{$admissionEdit->email}}" class="form-control" placeholder="Enter Your email">
									<div>
										@error('email')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>
								<div class="form-select" id="service-select">
									<label for="clist_id"><h3 class="text-white">Select Class</h3></label>
									<select name="clist_id" class="form-control" id="clist_id">
										<option>Select Your Class</option>
										@foreach($class as $data)
										<option value="{{$data->id}}">{{$data->class_name}}</option>
										@endforeach
									</select>
									<div>
										@error('clist_id')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>			
								<div class="form-select" id="service-select">
									<label for="department_id"><h3 class="text-white"> Select Department</h3></label>
									<select name="department_id" class="form-control" id="department_id">
										<option>Choose Department<option>
										@foreach($department as $values)
										<option value="{{$values->id}}">{{$values->department_name}}</option>
										@endforeach	
									</select>
									<div>
										@error('department_id')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>
								<div>
									<label for="image"><h3 class="text-white">Student Image</h3></label>
									<input type="file" name="image" value="{{$admissionEdit->image}}" id="image" class="form-control">
                                    
									<div>
										@error('image')
										 <strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>			
														
								<button type="submit" class="primary-btn text-uppercase">Update</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
			
		
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of our Institute</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('frontrand/img/e1.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('frontrand/img/e2.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('frontrand/img/e1.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('frontrand/img/e1.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('frontrand/img/e2.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('frontrand/img/e1.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
						
			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>	
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="{{ asset('frontrand/img/r1.png')}}" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->	
			
			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Become an instructor</h1>
							<p>
								There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
							</p>
							<a class="primary-btn wh" href="#">Apply for the post</a>								
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta-one Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest posts from our Blog</h1>
								<p>In the history of modern astronomy there is.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('frontrand/img/b1.jpg')}}" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Addiction When Gambling Becomes A Problem</h5>
							</a>
							<p>
								Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('frontrand/img/b2.jpg')}}" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Computer Hardware Desktops And Notebooks</h5>
							</a>
							<p>
								Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons. 
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('frontrand/img/b3.jpg')}}" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Make Myspace Your Best Designed Space</h5>
							</a>
							<p>
								Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('frontrand/img/b4.jpg')}}" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Video Games Playing With Imagination</h5>
							</a>
							<p>
								About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet 
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
			

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>

            @endsection