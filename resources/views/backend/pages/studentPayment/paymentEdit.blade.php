@extends('backend.parts.master')
@section('main_content')

<div class="container">

	
          <h2 class="bg-primary text-center text-white mb-5">Student Fee Payment Edit Form</h2>
		  <br></br>
		  <div>
			@if(Session::has('message'))
			<p class="alert alert-success">{{Session::get('message')}}</p>
			@endif
		  </div>
               <form action="{{route('payment.update',$paymentEdit->id)}}" method="post">
				@csrf
				@method('PUT')
				 <div class="row">
				  <div class="col-md-12">
							   <div class="form-group">
									<label for="student_name"><h3 class="text-dark">Student Name</h3></label>
									<input name="student_id" value="{{$paymentEdit->students->student_name}}" id="student_name" class="form-control">
								</div>
								<div class="form-group">
									<label for="student_name"><h3 class="text-dark">Clas Name</h3></label>
									<input name="class_name" value="{{$paymentEdit->students->students_class->class_name}}" id="class_name" class="form-control">
								</div>
								<div class="form-group">
									<label for="roll"><h3 class="text-dark">Roll</h3></label>
									<input name="roll" value="{{$paymentEdit->students->roll}}" id="roll" class="form-control">
								</div>
								<div class="form-group">
									<label for="section_name"><h3 class="text-dark">Section Name</h3></label>
									<input name="section_name" value="{{$paymentEdit->students->student_section->section_name}}" id="section_name" class="form-control">
								</div>
								<div class="form-group">
									<label for="feeTypeName"><h3 class="text-dark">FeeType Name</h3></label>
									<input name="feetype_id" value="{{$paymentEdit->feeTypes->fee_type}}" id="feeTypeName" class="form-control">
										
								</div>
								<div class="form-group">
									<label for="amount"><h3 class="text-dark">Amount</h3></label>
									<input type="number" name="amount" value ="{{$paymentEdit->amount}}" class="form-control">
									<div>
										@error('amount')
										<strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>	
								<div class="form-group">
									<label for="paid_amount"><h3 class="text-dark"> Paid Amount</h3></label>
									<input type="number" name="paid_amount" value ="{{$paymentEdit->paid_amount}}"  class="form-control">
									<div>
										@error('paid_amount')
										<strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
								</div>		
                                <div class="form-group">
									<label for="methodName"><h3 class="text-dark">PaymentMethod Name</h3></label>
									<input class="form-control" name="paymentmethod_id" value="{{$paymentEdit->methods->method_name}}" id="methodName">
										
										<div>
										@error('paymentmethod_id')
										<strong class="text-danger">{{$message}}</strong>
										@enderror
									</div>
									
								</div>
														
								<button class="btn btn-primary mt-3 r">Update</button>
								</div>
							</div>
						
	             </form>
			 </div>
       
			
@endsection