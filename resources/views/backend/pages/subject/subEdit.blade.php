@extends('backend.parts.master')
@section('title','Subject Form')
@section('main_content')
<div class="container">
    <h1 class="text-center text-white bg-dark">Subject Edit Form</h1>
    <a href="{{route('subject.show')}}" class="btn btn-success mt-4">Back List</a>
    <br></br>
    
    <form action="{{route('update.subject',$subjectEdit->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mt-5">
            <label for="subject_name" class="form-label"><h4>Subject Name :</h4></label>
            <input type="text" name="subject_name" value="{{$subjectEdit->subject_name}}" class="form-control" placeholder="Type Subject Name">
            <div>
                @error('subject_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <label for="subject_name" class="form-label"><h4>Subject Cradit :</h4></label>
            <input type="number" name="subject_cradit" value="{{$subjectEdit->subject_cradit}}" class="form-control" placeholder="Type Subject Cradit">
            <div>
                @error('subject_cradit')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-dark">Update</button>
        </div>
    </form>
</div>
@endsection