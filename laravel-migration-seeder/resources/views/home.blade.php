@extends ('components.base')
@section('content')
<div class="container">
    <div class="row">
        @foreach($allTrips as $trip)
        
            <div class="card-container">
            <a href="#">
                <div class="card-content">
                    <div class="city">{{$trip->city}}</div>
                    <img src="{{$trip->cover}}" alt="">
                </div>
            </a>
                <div class="info">
                    <div class="price">A soli: {{$trip->price}} €</div>
                    <div class="country">{{$trip->country}}</div>
                </div>
            </div>
        @endforeach
    </div>    
</div>
<div class="container">
<h2>VIAGGI IN ITALIA:</h2>
    <div class="row">
    @foreach($filterTrips as $filterTrip)
        
        <div class="card-container">
        <a href="#">
            <div class="card-content">
                <div class="city">{{$filterTrip->city}}</div>
                <img src="{{$filterTrip->cover}}" alt="">
            </div>
        </a>
            <div class="info">
                <div class="price">A soli: {{$filterTrip->price}} €</div>
                <div class="country">{{$filterTrip->country}}</div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection