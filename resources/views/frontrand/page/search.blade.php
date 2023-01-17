@extends('frontrand.partials.index')

@section('content')

    
    <section class="section-products">
        <div class="container">

            
<div class="col-md-4">

   
</div>
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h3>Searching Student</h3>
                        
                    </div>
                </div>
            </div>
            <p>{{$students->count()}} Student found for "{{request()->search_key}}"</p>
            <div class="row">
            
                <br><br>
                <!-- Single Product -->
                <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sort By
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('search',['search_key='.request()->search_key.'&order_by=asc'])}}">Roll Low to High</a>
            <a class="dropdown-item" href="{{route('search',['search_key='.request()->search_key.'&order_by=desc'])}}">Roll High to Low</a>

        </div>
    </div>

            @foreach($students as $data)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <!-- <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                <li><a href="#"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div> -->
                        <div class="part-2">
                            <div class="col-sm-8 ">
                            <img src="{{asset ('upload/students/'.$data->profile_pic)}}" style="height: 150px; padding-top:50px;" alt="">
                            </div>
                            <h3 class="product-title">{{$data->student_name}}</h3>
                            <h4 class="product-old-price">{{$data->roll}} Roll</h4>
                            <h4 class="product-price">{{$data->phone}} Phone</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
