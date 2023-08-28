@extends('master')
@section("content")
<div class=" custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($products as $key=>$item)
  <div class="item {{ $key == 0 ?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" class="slider-img">
      <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>Your beauty is our Mission</p>
        </div>
      </a>
      </div>
    @endforeach 
  </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
<div class="trending wrapper">
  <h3 class="t1">Trending products</h3>
  @foreach($products as $key=>$item)
  <div class="trending-item">
    <a href="detail/{{$item['id']}}">
    <img src="{{$item['gallery']}}" class="trending-img">
    <div class="">
      <h3>{{$item['name']}}</h3>
      </div>
    </a>
    </div>
  @endforeach 
</div>
    
</div>
@endsection