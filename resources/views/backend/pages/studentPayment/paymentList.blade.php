@extends('backend.parts.master')
@section('main_content')
<div class="container">
   <table class="table table-bordered border-info text-center table-hover table-striped">
    <thead>
        <tr>
            <th>SL NO</th>
            <th>Student Name</th>
            <th>Class Name</th>
            <th>Roll</th>
            <th>Section Name</th>
            <th>FeeType Name</th>
            <th>Amount</th>
            <th>Paid Amount</th>
            <th>Method Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment_view)
        <tr>
            <td>{{$payment_view->id}}</td>
            <td>{{$payment_view->students->student_name}}</td>
            <td>{{$payment_view->students->students_class->class_name}}</td>
            <td>{{$payment_view->students->roll}}</td>
            <td>{{$payment_view->students->student_section->section_name}}</td>
            <td>{{$payment_view->feeTypes->fee_type}}</td>
            <td>{{$payment_view->amount}}</td>
            <td>{{$payment_view->paid_amount}}</td>
            <td>{{$payment_view->methods->method_name}}</td>
            <td>
                <a href="{{route('payment.edit',$payment_view->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('payment.delete',$payment_view->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>
   {{$payments->links()}}
</div>
@endsection
