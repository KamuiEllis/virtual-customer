<x-layout>
    <form class='row mt-1 p-5' action='/pay/{{$zone->id}}' method='POST'>
      @csrf
        <h3>Checkout</h3>
        <hr/>
        
        <div class='col-8 p-3 mr-2' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
          <div style='padding-top:5px; padding-left:10px; margin-bottom:10px; background-color:rgb(17, 39, 120); width:100%; height:50px; color:white;'>
            <h2 style=''>Sub Total</h2>
        </div>
            <div class="form-group checkout-fields" >
              <label for="exampleInputEmail1">Name on Card</label>
              <input type="text" class="form-control" name='CardholderName' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of cardholder">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('CardholderName')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>
            <div class="form-group mt-3 checkout-fields">
              <label for="exampleInputPassword1">Number on card</label>
              <input type="text" class="form-control" name='CardPan' id="exampleInputPassword1" placeholder="Enter name on credit card">
              @error('CardPan')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>
            <div class="form-group mt-3 checkout-fields" style='width:100px;'>
                <label for="exampleInputPassword1">Expiry Date</label>
                <input type="text" class="form-control" name='CardExpiration' id="exampleInputPassword1" placeholder="xx/xxxx">
                @error('CardExpiration')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
              </div>

            <div class="form-group mt-3 checkout-fields" style='width:100px;'>
                <label for="exampleInputPassword1">CVV</label>
                <input type="text" class="form-control" name='CardCvv' id="exampleInputPassword1" placeholder="xxx">
                @error('CardCvv')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror    
            </div>

            <div class="form-check" style='padding-top:10; width:100%; background-color:rgb(197, 197, 197); height:50px; margin-top:10px;'>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                I have read and consent to computers online processing my information in accordance with the Privacy Statement and Cookie Policy
              </label>
            </div>
            
          </div>

          <div class='col-3 p-3' style='margin-left:20px; min-height:300px;'>
            <div style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;' class='p-2'>
              <div style='padding-top:5px; padding-left:10px; margin-bottom:10px; background-color:rgb(17, 39, 120); width:100%; height:50px; color:white;'>
                <h2 style=''>Summary</h2>
            </div>
              <p style='margin-bottom:0px;'>Sub Total Pounds:   $@php echo number_format($subTotal)@endphp JMD</p>
              <p style='margin-bottom:5px;'>Freight Cost:  <span style='color:rgb(206, 156, 80);'>$@php echo number_format($totalPounds)@endphp JMD</span></p>
              <p style='font-size:30px;'> <span >Total:</span> $@php echo number_format($totalCost)@endphp JMD</p>
              <div style='width:100%; text-align:center;' class='mt-4'>
                <button class='buttons' type='submit' style='background-color:rgb(206, 156, 80);'>Checkout</button>
            </div>
          </div>
          <div style='border: 1px solid rgb(208, 208, 208);' class='mt-3 p-2' >
            <h4>SHIPPING & DELIVERY</h4>
            <p>Orders are delivered in business days (Monday - Friday) excluding public holidays</p>
            <a href='#'>See Details</a>
          </div>
          <div style='width:100%; text-align:center; margin-top:30px;'>
            <img src='{{ asset('/cards.png') }}' class='login-pic' width='300' />
          </div>
        </div>

        
    </form>
</x-layout>