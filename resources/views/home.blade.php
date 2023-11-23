<x-layout>
    <div class="jumbotron text-center" style=''>
        <div class=''>
            <h1>Welcome to Computer's Online</h1><br/>
            <button class='buttons'>View our Inventory</button>
        </div><br/>
        <div class='row'>
        </div>
    </div>

    <div class='brands-section '>
        <div class='row text-align'>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
        </div>

        <div class='row text-align'>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/images/laptop.jpg') }}' width='200' />
                <h3>Cameras</h3>
            </div>
        </div>
    </div>

    <div class='news-section row'>
        <div class='col-6 text-center'>
            <video width="520" height="240" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class='col-6 text-center'>
            <p class='news-text'>Latest Tech Review from Computer Sales</p>
        </div>
    </div>
</x-layout>