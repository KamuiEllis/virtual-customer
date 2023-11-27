<x-layout>
    <div class='row mt-1 p-5'>
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
                    <td>{{$order->total_payment}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->status}}</td>
                    <td><button class='btn btn-secondary'>View</button></td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    {{-- {{$orders}} --}}
</x-layout>