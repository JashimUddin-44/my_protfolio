@extends('backend.parts.master')
@section('title','Students Admission List Show')
@section('main_content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-dark">Admission Of Students List</h1>
                <a class="btn btn-success" href="home-page">Create Form</a>
                <br><br>
            
                 @if(Session::has('danger'))
                 <p class="alert alert-danger">{{Session::get('danger')}}</p>
                 @endif
                <table class="table table-bordered border-primary table-striped table-hover table-sm text-center table-info">
                    <thead class="thead-dark">
                      <tr>
                        <th class="bg-info text-dark">SL</th>
                        <th class="bg-info text-dark">Student Name</th>
                        <th class="bg-info text-dark">Father Name</th>
                        <th class="bg-info text-dark">Mother Name</th>
                        <th class="bg-info text-dark">Mobaile Number</th>
                         <th class="bg-info text-dark">Email Address</th>
                         <th class="bg-info text-dark">Class Name</th>
                        <th class="bg-info text-dark">Department</th>
                        <th class="bg-info text-dark">Image</th>
                        <th class="bg-info text-dark">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     @foreach($admissions as $admission)
                        <tr>
                          <th class="bg-info">{{$admission->id}}</th>
                          <td class="bg-info">{{$admission->student_name}}</td>
                          <td class="bg-info">{{$admission->father_name}}</td>
                          <td class="bg-info">{{$admission->mother_name}}</td>
                          <td class="bg-info">{{$admission->mobaile_number}}</td>
                          <td class="bg-info">{{$admission->email}}</td>
                          <td class="bg-info">@if($admission->student_class){{$admission->student_class->class_name}}@endif</td>
                          <td class="bg-info">@if($admission->student_department){{$admission->student_department->department_name}}@endif</td>
                          <td><img src="{{asset('uploads/student/'.$admission->image)}}" alt="image not found" height="80px" width="80px"></td>
                          <td>
                            <a href="{{route('edit.data',$admission->id)}}" class="btn btn-primary">edit</a>
                            <a href="{{route('delete.data',$admission->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>
                        @endforeach
                        
                       
                    
                    </tbody>
                    
                  </table>
                  {{$admissions->links()}}

                  

            </div>
        </div>
    </div>
    

@endsection