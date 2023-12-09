<x-layout>
    <div class='row mt-1 p-lg-5 p-2'>
        <h2>Order History</h2>
        <hr/>
        <div class='mt-3 p-lg-3 card'>
            <p><b>Receiver's name:</b> {{$order->name}}</p>
            <p><b>Parish:</b> {{$order->parish}}</p>
            <p><b>Address:</b> {{$order->address}}</p>
            <p><b>Area:</b> {{$order->area}}</p>
            <p><b>Status:</b> {{$order->status}}</p>
            <p><b>Type of Delivery:</b> {{$order->delivery_type}}</p>

            <h3 class='mt-5'>Products</h3>
            <table class="table table-responsive mt-1">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Cost</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $item)
                    <tr>
                        <th scope="row">{{$item->name}}</th>
                        <td>{{$item->type}}</td>
                        <td>{{$item->weight}}</td>
                        <td>{{$item->quantity_bought}}</td>
                        <td>$@php echo number_format($item->cost) @endphp</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>

              <h4>Cost of Delivery: $@php echo number_format($order->zone_cost) @endphp</h4>
              <h4>Cost Per Pound: $@php echo number_format($order->zone_per_pound) @endphp</h4>
              <h4>Total Cost: $@php echo number_format($order->total_payment) @endphp</h4>
        </div>
    </div>    
</x-layout>