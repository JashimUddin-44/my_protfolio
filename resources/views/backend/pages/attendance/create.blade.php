@extends('backend.parts.master')
@section('main_content')

<div class="container">
    <div class="bg-warning">
        <h1 class="text-center text-dark">Attendance Of Students Form</h1>
    </div>
    <a href="{{route('student.attendance')}}" class="btn btn-dark">Back List</a>
    <br></br>
     
    <form action="{{route('attendance.store')}}" method="post">
      @csrf
    <div class="input-group input-group-lg mt-3">
        <label for="student_name" class="input-group-text">Student Name :</label>
        <input type="text" name="student_name" class="form-control" placeholder="Type Student Name">
        <div>
            @error('student_name')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>

    <div class="input-group input-group-lg mt-5">
        <label for="class_name" class="input-group-text">Class Name :</label>
        <select name="class_name" class="form-control form-select" id="class_name">
            <option value="">select class</option>
            <option>Six</option>
            <option>Seven</option>
            <option>Eight</option>
            <option>Nine</option>
            <option>Ten</option>
        </select>
        <div>
            @error('class_name')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>

    <div class="input-group input-group-lg mt-5">
        <label for="department_name" class="input-group-text">Department Name :</label>
        <select name="department_name" class="form-control form-select" id="departmet_name">
            <option value="">select department</option>
            <option>Arts</option>
            <option>Commerce</option>
            <option>Science</option>
        </select>
        <div>
            @error('department_name')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>
    <div class="input-group input-group-lg mt-5">
        <label for="section_name" class="input-group-text">Department Name :</label>
        <select name="section_name" class="form-control form-select" id="section_name">
            <option value="">select section</option>
            <option>Shapla</option>
            <option>Golap</option>
            <option>Jova</option>
            <option>Rojoni gonda</option>
        </select>
        <div>
            @error('section_name')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>

    <div class="input-group input-group-lg mt-5">
        <label for="roll" class="input-group-text">Roll :</label>
        <input type="number" name="roll" class="form-control" placeholder="Type Student Roll">
        <div>
            @error('roll')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>

   <div class="text-center">
   <button type="submit" class="btn btn-primary mt-3">Save</button>
   </div>

    
    </form>
</div>
@endsection