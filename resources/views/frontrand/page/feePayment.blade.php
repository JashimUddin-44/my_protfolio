@extends('frontrand.partials.index')
@section('content')
<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								We Ensure better education
								for a better world			
							</h1>
							<p class="pt-10 pb-10">
								In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
<div class="container">

	
          <h2 class="bg-primary text-center text-white mb-5">Student Fee Payment In This Form</h2>
		  <br></br>
		  <div>
			@if(Session::has('message'))
			<p class="alert alert-success">{{Session::get('message')}}</p>
			@endif
		  </div>
               <form action="{{route('student.payment')}}" method="post">
				@csrf
				 <div class="row">
				  <div class="col-md-12">
							   <div class="form-group">
									<label for="student_name"><h3 class="text-dark">Student Name</h3></label>
									<select name="student_id" id="student_name" class="form-control">
										@foreach($students as $student)
										<option value="{{$student->id}}">{{$student->student_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="feeTypeName"><h3 class="text-dark">FeeType Name</h3></label>
									<select name="feetype_id" id="feeTypeName" class="form-control">
										@foreach($feetypes as $feetype)
										<option value="{{$feetype->id}}">{{$feetype->fee_type}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="amount"><h3 class="text-dark">Amount</h3></label>
									<input type="number" name="amount" class="form-control" placeholder="Enter Your amount">
									<div>
										@error('amount')
										<strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>	
								<div class="form-group">
									<label for="paid_amount"><h3 class="text-dark"> Paid Amount</h3></label>
									<input type="number" name="paid_amount" class="form-control" placeholder="Enter Your paid amount">
									<div>
										@error('paid_amount')
										<strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>		
                                <div class="form-group">
									<label for="methodName"><h3 class="text-dark">PaymentMethod Name</h3></label>
									<select class="form-control" name="paymentmethod_id" id="methodName">
										<option value="">select method</option>
										@foreach($methods as $method)
										<option value="{{$method->id}}">{{$method->method_name}}<option>	
										@endforeach	
										<div>
										@error('paymentmethod_id')
										<strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
									</select>
								</div>
														
								<button class="primary-btn text-uppercase mb-3">Submit</button>
								</div>
							</div>
						
	             </form>
			 </div>
       
			
@endsection