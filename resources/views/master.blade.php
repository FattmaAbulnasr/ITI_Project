<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top:100px;
    }

    img.slider-img{
        height: 400px !important
    }

    .custom-product{
        height: 600px;
    }
    
    .slider-text{
      font-size: large !important; 
      color: brown;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
      
    }

    .trending-img{
        height: 250px;
        margin:5%;
    }

    .trending-item{
        float:left;
        width: 30%;
        margin:20px;
        padding:15px;
    }

  .trending wrapper{
    margin:30px;
  }

  .t1{
    color:brown;
    font-family:'Courier New', Courier, monospace;
    font-weight: bold;
    margin:2%; 
    text-align: center;
    font-size: 40px;

  }

  .h3{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:brown;
  }

  body {
   
  color:brown;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 400;
    line-height: 1.1;
    color: inherit;
}

.detail-img{
  heigth:30px;
  width:300px;
 
}

.search-box{
  width :500px !important
}
.name,.price,.cat,.add,.buy{
  margin-left: 200px;
}

.cart-list-devider
{
  border-top: 1px solid #ccc;
 
}


</style>
</html>