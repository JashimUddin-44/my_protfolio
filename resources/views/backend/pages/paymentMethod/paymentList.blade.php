@extends('backend.parts.master')
@section('title','Payment Method List Show')
@section('main_content')

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             
                <h1 class="text-center text-primary">Payment Method List</h1>

             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
             @if(Session::has('success'))
                <p class="alert alert-success">{{Session::get('success')}}</p>
             @endif
                <a href="{{route('method.form')}}" class="btn btn-success">Create Form</a>
                <br><br>
            
                 
                <table class="table table-bordered border-danger table-sm table-bordered table-hover table-striped text-center table-primary">
                    <thead>
                     
                      <tr>
                        <th class="bg-primary text-white"><h4>SL</h4></th>
                        <th class="bg-primary text-white"><h4>PaymentMethod Name</h4></th>
                        <th class="bg-primary text-white"><h4>Comments</h4></th>
                        <th class="bg-primary text-white"><h4>Action</h4></th>
                      </tr>
                     
                    </thead>
                    <tbody>
                      
                    @foreach($methodNames as $method_view)
                        <tr>
                          <td class="bg-primary">{{$method_view->id}}</td>
                          <td class="bg-primary">{{$method_view->method_name}}</td>
                          <td class="bg-primary">{{$method_view->comments}}</td>
                          <td>
                            <a href="{{route('method.edit',$method_view->id)}}" class="btn btn-primary">edit</a>
                            <a href="{{route('method.delete',$method_view->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>

                        @endforeach
                        
                       
                    
                    </tbody>
                  </table>

                  

            </div>
        </div>
    </div>
    
@endsection