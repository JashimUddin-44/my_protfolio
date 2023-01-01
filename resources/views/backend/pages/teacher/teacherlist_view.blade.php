@extends('backend.parts.master')
@section('title','Teachers List Show')
@section('main_content')

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <!-- {{$teachers}} -->
                <h1 class="text-center text-primary">Teachers List</h1>

             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
                <a href="{{url('/teacher_create')}}" class="btn btn-success">Create Form</a>
                <br><br>
            
           
                <table class="table table-bordered border-danger table-sm table-bordered table-hover table-striped text-center table-primary">
                    <thead>
                      <tr>
                        <th class="bg-primary text-white"><h4>SL</h4></th>
                        <th class="bg-primary text-white"><h4>Name</h4></th>
                        <th class="bg-primary text-white"><h4>Phone</h4></th>
                        <th class="bg-primary text-white"><h4>Email</h4></th>
                        <th class="bg-primary text-white"><h4>Image</h4></th>
                        <th class="bg-primary text-white"><h4>Action</h4></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     @foreach($teachers as $teacher_view)
                        <tr>
                          <td class="bg-primary">{{$teacher_view->id}}</td>
                          <td class="bg-primary">{{$teacher_view->name}}</td>
                          <td class="bg-primary">{{$teacher_view->phone}}</td>
                          <td class="bg-primary">{{$teacher_view->email}}</td>
                          <td class="bg-primary"><img src="{{ asset('upload/teachers/'.$teacher_view->image) }}" alt="Teacher Profile" class="rounded-circle" height="80px" width="80px"></td>
                          <td>
                            <a href="{{url('edit',$teacher_view->id)}}" class="btn btn-primary">edit</a>
                            <a href="{{route('teacher.delete',$teacher_view->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>
                        @endforeach
                       
                    
                    </tbody>
                  </table>

                  {{$teachers->links()}}

            </div>
        </div>
    </div>
    
@endsection