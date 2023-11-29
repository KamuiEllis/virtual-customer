<x-layout>
    <div class='row mt-1 p-5'>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <h2>Order History</h2>
        <hr/>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name of recipient</th>
                <th scope="col">Total Cost</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>$@php echo number_format($order->total_payment) @endphp</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->status}}</td>
                    <td><a href='/orderDetail/{{$order->id}}'><button class='btn btn-secondary'>View</button></a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    {{-- {{$orders}} --}}
</x-layout>