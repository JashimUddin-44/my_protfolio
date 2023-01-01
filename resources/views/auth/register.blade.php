@extends('layouts.app')
@section('title','User Register Form')
@section('content')


        <div class="widget-container col-md-4 m-auto">
            <div class="card bg-white">
                <div class="card-header"><h1 class="text-center">Register</h1></div>
                <div class="card-body pt0 rounded-bottom ps" id="open-projects-container" style="height: 350px; position: relative;">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ session::get('error')}}</div>
                    @endif
                    <form action="{{route('user.register')}}" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}">

                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid E-mail" value="{{ old('email') }}">

                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="*******">

                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8 text-left mt-3">
                                <a href="#" class="btn btn-link">Forgot password</a>
                            </div>

                        <div class="col-4 text-right mt-3 text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
       </div>
@endsection