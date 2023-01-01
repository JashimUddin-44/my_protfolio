@extends('backend.parts.master')
@section('title','Institiute Information Show')
@section('main_content')
    
    <div class="container">
        <div class="row">
          
            <div class="col-md-12">
                <h1 class="text-center text-primary">Institiute Information</h1>
                <div class="mx-auto my-2">
                   <a class="btn btn-success" href="{{route('school.create')}}">Create Form</a>
                </div>
                <br><br>
            
           
                <table class="table table-bordered border-warning table-hover text-center text-white table-info">
                    <thead>
                      <tr>
                        <th class="bg-primary"><h4>SL</h4></th>
                        <th class="bg-primary"><h4>Institiute Name</h4></th>
                        <th class="bg-primary"><h4>Institiute Code</h4></th>
                        <th class="bg-primary"><h4>Institiute Address</h4></th>
                        <th class="bg-primary" ><h4>Image</h4></th>
                        <th class="bg-primary"><h4>Action</h4></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     @foreach($institiute as $institiute_view)
                        <tr>
                          <th class="bg-info text-dark">{{$institiute_view->id}}</th>
                          <td class="bg-info text-dark">{{$institiute_view->institiute_name}}</td>
                          <td class="bg-info text-dark">{{$institiute_view->institiute_code}}</td>
                          <td class="bg-info text-dark">{{$institiute_view->institiute_address}}</td>
                          <td class="bg-info text-dark"><img src="{{ asset('upload/institiute/'.$institiute_view->image)}}" alt="Institiute Profile" height="80px" width="80px"></td>
                          <td>
                            <a href="{{route('institiute.edit',$institiute_view->id)}}" class="btn btn-primary">edit</a>
                            <a href="{{url('delete',$institiute_view->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>
                      @endforeach  
                       
                    
                    </tbody>
                  </table>

                  

            </div>
        </div>
    </div>
    
@endsection