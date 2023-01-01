@extends('backend.parts.master')
@section('main_content')

<div class="container">
    <div class="bg-warning">
        <h1 class="text-center text-white">FreeType Add Form</h1>
    </div>
    <br>
    <a href="{{route('feetype.views')}}" class="btn btn-dark">Back List</a>
    <br></br>
    @if(Session::has('success'))
     <p class="allert allert-primary">{{Session::get('success')}}</p>
    @endif
    <form action="{{route('feeType.store')}}" method="post">
        @csrf
        
        <div class="form-floating mt-5">
            <input type="text" name="fee_type" class="form-control" id="floating" placeholder="habijabi">
            <label for="floating">FeeType Name :</label>
            <div>
                @error('fee_type')
                 <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="mt-5">
            <button class="btn btn-dark" type="submit" value="submit">FeeType Save</button>
        </div>


    </form>


</div>




@endsection