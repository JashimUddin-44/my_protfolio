@extends('backend.parts.master')
@section('main_content')

<div class="container">
    <div class="bg-warning">
        <h1 class="text-center text-dark">Attendance Of Students Edit Form</h1>
    </div>
    <a href="{{route('student.attendance')}}" class="btn btn-dark">Back List</a>
    <br></br>
     
    <form action="{{route('update.attendance',$attendanceEdit->id)}}" method="post">
      @csrf
      @method('PUT')
    <div class="input-group input-group-lg mt-3">
        <label for="student_name" class="input-group-text">Student Name :</label>
        <input type="text" name="student_name" value="{{$attendanceEdit->student_name}}" class="form-control" placeholder="Type Student Name">
    </div>

    <div class="input-group input-group-lg mt-5">
        <label for="class_name" class="input-group-text">Class Name :</label>
       <input type="text" name="class_name" value="{{$attendanceEdit->class_name}}" class="form-control">
    </div>

    <div class="input-group input-group-lg mt-5">
        <label for="department_name" class="input-group-text">Department Name :</label>
        <input type="text" name="department_name" value="{{$attendanceEdit->department_name}}" class="form-control">
    </div>
    <div class="input-group input-group-lg mt-5">
        <label for="section_name" class="input-group-text">Department Name :</label>
        <input type="text" name="section_name" value="{{$attendanceEdit->section_name}}" class="form-control">
    </div>

    <div class="input-group input-group-lg mt-5">
        <label for="roll" class="input-group-text">Roll :</label>
        <input type="number" name="roll" value="{{$attendanceEdit->roll}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Update</button>

    
    </form>
</div>
@endsection