@extends('backend.parts.master')
@section('title','subjects List Show')
@section('main_content')

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              
                <h1 class="text-center text-primary">Subjects List Show</h1>

             
                <a href="{{route('subject.form')}}" class="btn btn-success">Create Form</a>
                <br><br>
                 @if(Session::has('success'))
                     <p class="alert alert-success">{{Session::get('success')}}</p>
                 @endif
            
           
                <table class="table table-bordered border-danger table-sm table-bordered table-hover table-striped text-center table-primary">
                    <thead>
                      <tr>
                        <th class="bg-primary text-white"><h4>SL</h4></th>
                        <th class="bg-primary text-white"><h4>Subjec Name</h4></th>
                        <th class="bg-primary text-white"><h4>Cradit</h4></th>
                        <th class="bg-primary text-white"><h4>Action</h4></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    @foreach($subjects as $subject_view)
                        <tr>
                          <td class="bg-primary">{{$subject_view->id}}</td>
                          <td class="bg-primary">{{$subject_view->subject_name}}</td>
                          <td class="bg-primary">{{$subject_view->subject_cradit}}</td> 
                          <td>
                            <a href="{{route('subject.edit',$subject_view->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('subject.delete',$subject_view->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>
                        @endforeach
                        
                       
                    
                    </tbody>
                  </table>

                  {{$subjects->links()}}

            </div>
        </div>
    </div>
    
@endsection