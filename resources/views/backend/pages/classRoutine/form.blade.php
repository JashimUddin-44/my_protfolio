@extends('backend.parts.master')
@section('main_content')
<div class="container">
   <div class="text-center bg-primary">
    <marquee behavior="scroll" scrollamount="12" direction="right"> <h1 class="text-white">Class Routine Form</h1></marquee>
   </div>
   <br></br>
   <a href="{{route('classRoutine.show')}}" class="btn btn-dark">Back Routine</a>
    <form action="{{route('routine.store')}}" method="post">
        @csrf
        <div class="from-group mt-4">
            <label for="teacher_id" class="form-label"><h4>Teacher Name :</h4></label>
            <select name="teacher_id" class="form-select form-control form-control-lg" id="teacher_id">
                <option value="">selected teacher</option>
                @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                @endforeach
            </select>
            <div>
                @error('teacher_id')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="from-group mt-4">
            <label for="subject_id" class="form-label"><h4>Subject Name :</h4></label>
            <select name="subject_id" class="form-select form-control form-control-lg" id="subject_id">
                <option value="">selected teacher</option>
                @foreach($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                @endforeach
            </select>
            @error('subject_id')
                <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

        <div class="from-group mt-4">
            <label for="datetime" class="form-label"><h4>Time :</h4></label>
            <input type="dateTime" name="time" class="form-control">
            @error('time')
                <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        
    </form>
</div>
@endsection