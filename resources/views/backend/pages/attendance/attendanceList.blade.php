@extends('backend.parts.master')
@section('main_content')
<div class="container">
    <h1 class="text-center text-primary">Attendance List Table</h1>
    
    <a href="{{url('attendance-form')}}" class="btn btn-dark">Go Back</a>
    <br></br>
    @if(Session::has('success'))
     <p class="alert alert-danger">{{Session::get('success')}}</p>
     @endif
    <table class="table table-bordered border-danger table-hover table-striped table-primary text-center">
        <thead>
            <tr>
                <th class="bg-primary">SL NO</th>
                <th class="bg-primary">Student Name</th>
                <th class="bg-primary">Class Name</th>
                <th class="bg-primary">Department Name</th>
                <th class="bg-primary">Section Name</th>
                <th class="bg-primary">Roll</th>
                <th class="bg-primary">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viewData as $attendance)
            <tr>
                <td class="bg-primary">{{$attendance->id}}</td>
                <td class="bg-primary">{{$attendance->student_name}}</td>
                <td class="bg-primary">{{$attendance->class_name}}</td>
                <td class="bg-primary">{{$attendance->department_name}}</td>
                <td class="bg-primary">{{$attendance->section_name}}</td>
                <td class="bg-primary">{{$attendance->roll}}</td>
                <td>
                    <a href="{{route('attendance.edit',$attendance->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('attendance.delete',$attendance->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$viewData->links()}}
</div>
@endsection