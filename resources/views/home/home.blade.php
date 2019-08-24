@extends('home.master')
@section('title','Home')
@section('content')

  <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Popular Products</h3>
            <h2 class="section-title mb-3">Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="row">
         @foreach($new as $val)
        @if($val->status == 1)
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="{{$val->avatar}}" alt="Image"  height="250">
              </figure>
              <div class="px-4">
                <h3><a href="#">{{$val->title}}</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">5000000</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="{{route('home.get.content',$val->changetitle)}}" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
      @endif
    @endforeach
          
        </div>
      </div>
@endsection