@extends('backend.parts.master')
@section('title','Method Name Edit Form')
@section('main_content')

<div class="container">
    <div class="bg-warning">
        <h1 class="text-center text-white">PaymentMethod Edit Form</h1>
    </div>
    <br>
    <a href="{{route('paymentMethod.show')}}" class="btn btn-dark">Back List</a>
    @if(Session::has('success'))
     <p class="allert allert-success">{{Session::get('success')}}</p>
    @endif()
    <form action="{{route('update.method',$methodEdit->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-floating mt-5">
            <input type="text" name="method_name" value="{{$methodEdit->method_name}}" class="form-control" id="floating" placeholder="habijabi">
            <label for="floating">Method Name :</label>

            <div>
                @error('method_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="form-floating mt-5">
            <input type="text" name="comments" value="{{$methodEdit->comments}}" class="form-control" id="floating" placeholder="habijabi">
            <label for="floating">Comments :</label>

            <div>
                @error('comments')
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