<x-invoiceLayout>
    {{-- <div class=' mt-1 p-lg-5 p-2'>
      <div class='row'>
        <div></div>
        <img src='{{ asset('/logo.png') }}' class='col-6' style='width:200; margin-bottom:20px;'  />
        <div class='col-6' style='float:right;'>
          <h1>INVOICE</h1>
        </div>
      </div>
      
    
        <div class='mt-3 p-lg-3'>
            <p class='m-10'><b>Receiver's name:</b> {{$order->name}}</p>
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
                    @foreach ($products as $item)
                    <tr>
                        <th scope="row">{{$item['name']}}</th>
                        <td>{{$item['type']}}</td>
                        <td>{{$item['weight']}}</td>
                        <td>{{$item['amount_bought']}}</td>
                        <td>$@php echo number_format($item['cost']) @endphp</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>

              <h4>Total Cost Per Pound: $@php echo number_format($total_weight * $order->zone_per_pound) @endphp</h4>
              <h4>Total Cost: $@php echo number_format($order->total_payment) @endphp</h4>
        </div>
    </div>     --}}


    <div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="5">
						<table>
							<tr>
								<td class="title">
                  <img src='{{ asset('/logo.png') }}' style='width:100px; max-width:300px margin-bottom:20px;'  />

								</td>

								<td>
									Invoice #: {{str_pad($order->id, 5, '0', STR_PAD_LEFT)}}<br />
									Created: {{date("Y-m-d")}}<br />
									{{-- Due: February 1, 2023 --}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
								<td>
									109 Harbour <br />
									St. Kingston.<br />
								</td>

								<td>
									{{auth()->user()->firstname}} 	{{auth()->user()->lastname}}<br />
									{{auth()->user()->email}}
								</td>
							</tr>
						</table>
					</td>
				</tr>


        <table class="table table-responsive mt-1">
          <thead  class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Weight</th>
              <th scope="col">Quantity</th>
              <th scope="col">Cost</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($products as $item)
              <tr>
                  <th>{{$item['name']}}</th>
                  <td style='float:left;'>{{$item['weight']}}</td>
                  <td>{{$item['amount_bought']}}</td>
                  <td>$@php echo number_format($item['cost']) @endphp</td>
                </tr>
              @endforeach
          </tbody>
        </table>

        <p>Total Cost Per Pound: $@php echo number_format($total_weight * $order->zone_per_pound) @endphp</p>
        <p>Total Cost: $@php echo number_format($order->total_payment) @endphp</p>
                   
			</table>
		</div>
</x-invoiceLayout>