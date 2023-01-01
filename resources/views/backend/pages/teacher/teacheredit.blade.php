@extends('backend.parts.master')
@section('title','Teachers edit Form')
@section('main_content')

<div class="container">
        <div class="row">
           <div class="col-md-12">
             <marquee behavior="scroll" scrollamount="12" direction="left"><h1>Teachers edit information Add</h1></marquee>

             <a href="{{route('shows')}}" class="btn btn-primary my-3">Show</a>
             <a href="{{url('/teacher_create')}}" class="btn btn-success my-3">Create</a>
             <br>
             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
              
                <form action="{{url('/update/'.$teacherEdit->id )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="name" class="form-label">Full Name </label>
                          <input type="text" name="name" class="form-control" value="{{$teacherEdit->name}}" id="name" placeholder="Full Name">
                        </div>
    
                        <div class="mb-3">
                          <label for="subject" class="form-label">subject </label>
                          <input type="text" name="subject" value="{{$teacherEdit->subject}}" class="form-control" id="subject" placeholder="subject">
                        </div>

                        <div class="mb-3">
                          <label for="phone" class="form-label">Phone </label>
                          <input type="number" name="phone" value="{{$teacherEdit->phone}}" class="form-control" id="phone" placeholder="Phone">
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label">Email </label>
                          <input type="email" name="email" value="{{$teacherEdit->email}}" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="mb-3">
                          <label for="image" class="form-label"><h5>Profile Picture</h5> </label>
                          <input type="file" name="image" class="form-control" id="image">
                          <img src="{{ asset('upload/teachers/'.$teacherEdit->image) }}" alt="Teacher Profile" class="rounded-circle" height="80px" width="80px">
                        </div>

                      </div>
                      
                    <button type="submit" class="btn btn-primary" value="submit">Update</button>
                    </div>



 

                  </form>
                  <br>
            </div>
          </div>
    </div>

   
@endsection