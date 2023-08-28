@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
         <img  class="detail-img" src="{{$Product['gallery']}} " alt="">
        </div>

        <div class="col-sm-6">
          <a href="/">Go Back</a>
          <h3 class="name">{{$Product['name']}}</h2>
          <h4 class="price">Price: {{$Product['price']}}</h4>
          <h5 class="cat">Category: {{$Product['category']}}</h5>
          <br><br>
         <form  action ="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value = {{$Product['id']}}>
          <button class="add" class="btn-btn-success">Add To Cart</button>
         </form>
          <br><br>
          <button class="buy" class="btn-btn-success">Buy Now</button>
          <br><br>
        </div>

    </div>

</div>
@endsection