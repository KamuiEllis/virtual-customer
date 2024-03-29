<x-layout>
    <div class='row mt-1 p-lg-5 success-background text-center'>
        <div class='success-container'>
            <div class='success-container2'>
                <div >
                    <img src='{{ asset('/mail.png') }}' class='mail' width='400' />
                </div>
            </div>
     
            <div class='mt-5'>
                <h1 class='mb-0'>Thank you</h1>
                <h2>for your purchase</h2>
                <p>An invoice has been sent to your email address you provided you can also view your order history by clicking the button below or click view invoice to see it now.</p>
                <div class='text-center'>
                    <a href='/orderHistory' class=''><button class='btn btn-primary col-6 mb-sm-2 mt-lg-2' style='width:150px'>Order History</button></a>
                    <a href='/orderDetail/{{$sku}}' class=''><button class='btn btn-primary col-6' style='width:150px'>Order View Invoice</button></a>
                </div>
            </div>
        </div>
    </div>    
</x-layout>