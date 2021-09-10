@extends('frontend.layout.master')

@section('title')
 Home Page
@endsection 

@section('content')
<div class="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Featured Items</h1>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel owl-theme">

          @foreach($product as $item)
            <a href="{{route('product.details',$item->id)}}">
              <div class="featured-item">
                <img src="{{asset('product/'.$item->image)}}" alt="Item 1">
                <h4>{{$item->product_name}}</h4>

                <h6>{{number_format($item->sell_price)}}</h6>
                @if($item->regular_price>0)
                <h6><del>{{number_format($item->regular_price)}}</</del></h6>
                @endif 
              </div>
            </a>
           @endforeach 
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection 
