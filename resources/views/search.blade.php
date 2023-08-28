@extends('master')
@section("content")
    <div class=" custom-product">
        <div class="col-sm-4">
          <a href="#">Filter</a>
      </div>
          
      <div class="col-sm-4">
        <div class="trending wrapper">
            <h4 class="t1">Result For Products</h4>
            @foreach($products as $key=>$item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
              <img src="{{$item['gallery']}}" class="trending-img">
              <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}</h5>
                </div>
              </a>
              </div>
            @endforeach 
          
      </div>
      
      </div>
      </div>
      

    

@endsection