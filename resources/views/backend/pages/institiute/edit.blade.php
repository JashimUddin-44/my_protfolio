@extends('backend.parts.master')
@section('title','Institiute Edit Form')
@section('main_content')

<div class="mx-auto my-2">
  <a href=""></a>
</div>
<h1 class="text-center bg-primary p-2 text-white">Institiute Create Form</h1>
<div class="mx-auto my-2">
    <a class="btn btn-success" href="{{route('school.show')}}">Back Show</a>
</div>
  @if(Session::has('msg'))
    <p class="alert alert-primary">{{Session::get('msg')}}</p>
  @endif
  <br>
<div class="container mx-auto">
    <form action="{{url('/update/'.$institiuteEdit->id)}}"method="post">
        @csrf
        <div class="form-group my-2">
            <label for="institiute_name">Institiute Name</label>
            <input type="text" name="institiute_name" class="form-control" value="{{$institiuteEdit->institiute_name}}" id="institiute_name" placeholder="institiute_name">

            @error('institiute_name')
             <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

        <div class="form-group my-2">
            <label for="institiute_code">Institiute Code</label>
            <input type="text" name="institiute_code" class="form-control" value="{{$institiuteEdit->institiute_code}}" id="institiute_code" placeholder="institiute_code">
            @error('institiute_code')
             <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

        <div class="form-group my-2">
            <label for="institiute_address">Institiute Address</label>
            <input type="text" name="institiute_address" class="form-control" value="{{$institiuteEdit->institiute_address}}" id="institiute_address" placeholder="institiute_address">

            @error('institiute_address')
             <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

        <div class="form-group my-2">
            <label for="image">Institiute Image</label>
            <input type="file" name="image" class="form-control" id="image" placeholder="image">

            @error('image')
             <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

</div> 
@endsection