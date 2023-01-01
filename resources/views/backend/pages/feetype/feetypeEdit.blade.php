@extends('backend.parts.master')
@section('main_content')

<div class="container">
    <div class="bg-warning">
        <h1 class="text-center text-white">FreeType Edit Form</h1>
    </div>
    <br>
    <a href="{{route('feetype.views')}}" class="btn btn-dark">Back List</a>
    <br></br>
    @if(Session::has('success'))
     <p class="allert allert-primary">{{Session::get('success')}}</p>
    @endif
    <form action="{{route('update.data',$feetypeEdit->id)}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-floating mt-5">
            <input type="text" name="fee_type" class="form-control" id="floating" value="{{$feetypeEdit->fee_type}}" placeholder="habijabi">
            <label for="floating">FeeType Name :</label>
            <div>
                @error('fee_type')
                 <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="mt-5">
            <button class="btn btn-dark" type="submit" value="submit">Update</button>
        </div>


    </form>


</div>




@endsection