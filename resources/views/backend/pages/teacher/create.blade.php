@extends('backend.parts.master')
@section('title','Teachers create Form')
@section('main_content')

<div class="container">
        <div class="row">
           <div class="col-md-12">
           <h1 class="text-center bg-primary p-2 text-white mt-5">Teacher Information Create Form</h1>

             <a href="{{url('teacher_Data_show')}}" class="btn btn-success my-3">Back Show</a>

             <br>
             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
              
                <form action="{{url('/storedata')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label for="name" class="form-label"><h5>Full Name</h5> </label>
                          <input type="text" name="name" class="form-control" value="{{ old('name'); }}" id="name" placeholder="Type Your Full Name">
                          @error('name')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="subject" class="form-label"><h5>Subject </h5></label>
                          <input type="text" name="subject" value="{{ old('subject'); }}" class="form-control" id="subject" placeholder="Type Your Subject">
                          @error('subject')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="phone" class="form-label"><h5>Phone</h5> </label>
                          <input type="number" name="phone" value="{{ old('phone'); }}" class="form-control" id="phone" placeholder="Type Your Phone">
                          @error('phone')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label"><h5>Email</h5> </label>
                          <input type="email" name="email" value="{{ old('email'); }}" class="form-control" id="email" placeholder="Type Your Email">
                          @error('email')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="image" class="form-label"><h5>Profile Picture</h5> </label>
                          <input type="file" name="image" value="{{ old('image'); }}" class="form-control" id="image">
                          @error('image')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
                        

                      </div>
                      
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>


                  </form>
                  <br>
            </div>
          </div>
    </div>



 



   
@endsection