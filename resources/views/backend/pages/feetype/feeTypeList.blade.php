@extends('backend.parts.master')
@section('title','FeeType  List Show')
@section('main_content')

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             
                <h1 class="text-center text-primary">FeeType List</h1>

             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
                <a href="{{route('feetype.form')}}" class="btn btn-success">Create Form</a>
                <br><br>
            
           
                <table class="table table-bordered border-danger table-sm table-bordered table-hover table-striped text-center table-primary">
                    <thead>
                     
                      <tr>
                        <th class="bg-primary text-white"><h4>SL</h4></th>
                        <th class="bg-primary text-white"><h4>Type Name</h4></th>
                        <th class="bg-primary text-white"><h4>Action</h4></th>
                      </tr>
                     
                    </thead>
                    <tbody>
                      
                    @foreach($feetype as $feetype_view)
                        <tr>
                          <td class="bg-primary">{{$feetype_view->id}}</td>
                          <td class="bg-primary">{{$feetype_view->fee_type}}</td>
                          <td>
                            <a href="{{route('feetype.edit',$feetype_view->id)}}" class="btn btn-primary">edit</a>
                            <a href="{{route('feetype.delete',$feetype_view->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>
                        @endforeach
                       
                    
                    </tbody>
                  </table>

                  

            </div>
        </div>
    </div>
    
@endsection