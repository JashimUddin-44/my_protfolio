@extends('layouts.app')
@section('title','Admin Login Form')
@section('content')


        <div class="widget-container col-md-4 m-auto">
            <div class="card bg-white">
                <div class="card-header"><h1>Login</h1></div>
                <div class="card-body pt0 rounded-bottom ps" id="open-projects-container" style="height: 330px; position: relative;">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ session::get('error')}}</div>
                    @endif
                    <form action="{{ route('login.admin') }}" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid E-mail" value="{{ old('email') }}">

                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="*******">

                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8 text-left mt-5">
                                <a href="#" class="btn btn-link">Forgot password</a>
                            </div>

                        <div class="col-4 text-right mt-5 text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
       </div>
@endsection