@extends('master')
@section("content")
    <div class=" custom-product">      
      <div class="col-sm-10">
        <div class="trending wrapper">
            <h4 class="t1">Result For Products</h4>
            <a class="btn btn-success"href="ordernow">Order Now</a> 
            <br>
            <br>
            @foreach($products as $key=>$item)
            <div class=" row searched-item cart-list-devider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                  <img src="{{$item->gallery}}" class="trending-img">
                  </a>
              </div>

              <div class=" row searched-item">
                <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                      </div>
                    
                </div>

                <div class=" row searched-item">
                  <div class="col-sm-3">
                   <a  href ="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>
                  </div>
             
              </div>
            @endforeach 
          
      </div>
      <a class="btn btn-success"href="ordernow">Order Now</a><br><br>
      
      </div>
      </div>
      

    

@endsection