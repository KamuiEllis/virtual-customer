<x-layout>
    <form class='row mt-1 p-5' action='/pay/{{$zone->id}}' method='POST'>
      @csrf
        <h3>Checkout</h3>
        <hr/>
       
        <div class='col-9'>
            <div class="form-group">
              <label for="exampleInputEmail1">Name on Card</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of cardholder">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputPassword1">Number on card</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter name on credit card">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Expiry Date</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter card's expiry date">
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputPassword1">CVV</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter card's CVV">
            </div>

            <button type="submit" class="buttons mt-3">Checkout</button>
          </div>

          <div class='col-3 card p-3'>
            <p><h4>Total Pounds:</h4> {{$totalPounds}} (LBS)</p>
            <p><h4>Delivery Cost:</h4>  $@php echo number_format($zone->price)@endphp JMD</p>
            <p><h4>Cost Per Pound:</h4> $@php echo number_format($zone->perPound)@endphp JMD</p>
            <p><h4>Total Cost:</h4> $@php echo number_format($totalCost)@endphp JMD</p>
        </div>
    </form>
</x-layout>