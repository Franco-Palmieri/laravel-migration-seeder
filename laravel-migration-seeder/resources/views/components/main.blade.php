<div class="container">
    <div class="row">
        @foreach($allTrips as $trip)
            <div class="card-container">
                <div class="card-content">
                    <div class="city">{{$trip->city}}</div>
                    <img src="{{$trip->cover}}" alt="">
                </div>
                <div class="price"></div>
                <div class="country"></div>
            </div>
        @endforeach
    </div>
</div>