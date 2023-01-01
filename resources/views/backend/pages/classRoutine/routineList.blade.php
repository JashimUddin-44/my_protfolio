@extends('backend.parts.master')
@section('main_content')
<div class="container">
    <h1 class="text-center text-primary">Class Route Table</h1>
    <a href="{{route('classRoutine.form')}}" class="btn btn-dark">Back Form</a>
    <br></br>
    @if(Session::has('message'))
    <p class="alert alert-success">{{Session::get('message')}}</p>
    @endif
    <table class="table table-bordered border-primary text-center">
        <thead>
            <tr>
                <th>SL NO</th>
                <th>Teacher Name</th>
                <th>Subject Name</th>
                <th>Time</th>
                <th> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($routine as $routine_view)
            <tr>
                <td>{{$routine_view->id}}</td>
                <td>{{$routine_view->teachers_name->name}}</td>
                <td>{{$routine_view->student_subject->subject_name}}</td>
                <td>{{$routine_view->time}}</td>
                <td>
                    <a href="{{route('classRoutine.edit',$routine_view->id)}}"class="btn btn-primary">Edit</a>
                    <a href="{{route('delete.routine',$routine_view->id)}}"class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$routine->links()}}
</div>
@endsection