@extends('backend.parts.master')
@section('title','Subject Form')
@section('main_content')
<div class="container">
    <h1 class="text-center text-white bg-dark">Subject Entry Form</h1>
    <a href="{{route('subject.show')}}" class="btn btn-success mt-4">Back List</a>
    <br></br>
    
    <form action="{{route('subject.store')}}" method="post">
        @csrf

        <div class="mt-5">
            <label for="subject_name" class="form-label"><h4>Subject Name :</h4></label>
            <input type="text" name="subject_name" class="form-control" placeholder="Type Subject Name">
            <div>
                @error('subject_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <label for="subject_name" class="form-label"><h4>Subject Cradit :</h4></label>
            <input type="number" name="subject_cradit" class="form-control" placeholder="Type Subject Cradit">
            <div>
                @error('subject_cradit')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</div>
@endsection