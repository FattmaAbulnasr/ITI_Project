@extends('master')
@section("content")
    <div class=" custom-product">      
      <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>{{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
               
              </tr>

              <tr>
                <td>Total Amount</td>
                <td>${{$total+10}}</td>
                
              </tr>

            </tbody>
          </table>
      </div>
      <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">  
            <textarea name="address" placeholder="Enter your address" class="form-control"  cols="10"></textarea>
        </div>
        <div class="form-group">
          <label for="pwd" value="cash">Payment Method</label><br><br>
         <input type="radio"  value="cash" name="payment"> <span>online payment</span>  <br><br>
         <input type="radio"  value="cash" name="payment"> <span> payment On Delivery</span> <br><br>
        </div>
        <button type="submit" class="btn btn-default">Order Now</button>
      </form>
    </div>
      
      </div>
    </div>
      

    

@endsection