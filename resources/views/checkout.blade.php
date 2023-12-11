<x-layout>
    <form class='row mt-1 p-lg-5 p-3' action='/pay/{{$zone->id}}' method='POST'>
      @csrf
        <h3>Payment Information</h3>
        <hr/>
     
        <div class='col-lg-8 col-sm-12 p-lg-3 mr-2' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
          <div style='padding-top:5px; padding-left:10px; margin-bottom:10px; background-color:rgb(17, 39, 120); width:100%; height:50px; color:white;'>
            <h2 style=''>Checkout Information</h2>
        </div>
            <div class="form-group checkout-fields mb-2" >
              <label for="exampleInputEmail1">Address line 1</label>
              <input type="text" class="form-control" name='addressOne' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of cardholder">
              <small id="emailHelp" class="form-text text-muted">Enter line 1.</small>
              @error('addressOne')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>

            <div class="form-group checkout-fields mb-2" >
              <label for="exampleInputEmail1">Address line 2</label>
              <input type="text" class="form-control" name='addressTwo' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of cardholder">
              <small id="emailHelp" class="form-text text-muted">Enter line 2.</small>
              @error('addressTwo')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>

            <div class="form-group checkout-fields mb-2" >
              <label for="exampleInputEmail1">Town</label>
              <input type="text" class="form-control" name='town' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of cardholder">
              <small id="emailHelp" class="form-text text-muted">Enter Town.</small>
              @error('town')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>

            <div class='mb-3 checkout-fields mb-2'>   
            <label for="exampleFormControlInput1" class="form-label">Parish</label>
            <select required class="form-control" name='parish'>
                <option value="">Select Parish</option>
                <option value="clarendon">Clarendon</option>
                <option value="hanover">Hanover</option>
                <option value="kingston">Kingston</option>
                <option value="manchester">Manchester</option>
                <option value="portland">Portland</option>
                <option value="saintAndrew">Saint Andrew</option>
                <option value="saintAnn">Saint Ann</option>
                <option value="saintCatherine">Saint Catherine</option>
                <option value="saintElizabeth">Saint Elizabeth</option>
                <option value="saintJames">Saint James</option>
                <option value="saintMary">Saint Mary</option>
                <option value="saintThomas">Saint Thomas</option>
                <option value="trelawny">Trelawny</option>
                <option value="westmoreland">Westmoreland</option>
            </select>
                
                @error('parish')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

            <div class="form-group checkout-fields mb-2" >
              <label for="exampleInputEmail1">Name on Card</label>
              <input type="text" class="form-control" name='CardholderName' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of cardholder">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('CardholderName')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>
            <div class="form-group mt-3 checkout-fields mb-2">
              <label for="exampleInputPassword1">Number on card</label>
              <input type="text" class="form-control" name='CardPan' id="exampleInputPassword1" placeholder="Enter name on credit card">
              @error('CardPan')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
            </div>
            <div class="form-group mt-3 checkout-fields mb-2" style='width:100px;'>
                <label for="exampleInputPassword1">Expiry Date</label>
                <input type="text" class="form-control" name='CardExpiration' id="exampleInputPassword1" placeholder="xx/xxxx">
                @error('CardExpiration')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
              </div>

            <div class="form-group mt-3 checkout-fields mb-2" style='width:100px;'>
                <label for="exampleInputPassword1">CVV</label>
                <input type="text" class="form-control" name='CardCvv' id="exampleInputPassword1" placeholder="xxx">
                @error('CardCvv')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror    
            </div>

            <!-- <div class="form-check" style='padding-top:10; width:100%; background-color:rgb(197, 197, 197); height:50px; margin-top:10px;'>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                I have read and consent to computers online processing my information in accordance with the Privacy Statement and Cookie Policy
              </label>
            </div> -->
            
          </div>

          <div class='col-lg-3 col-sm-12 p-3 sum-container'>
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