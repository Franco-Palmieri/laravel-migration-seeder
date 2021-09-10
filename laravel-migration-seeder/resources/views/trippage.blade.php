@extends ('components.base')

@section('content')
    <div class="container container-single">
        <div class="row">
            <div class="container-card">
                <div class="content-card">
                    <div class="city">{{$trip->city}}</div>
                    <img src="{{$trip->cover}}" alt="">
                </div>
                <div class="info">
                    <div class="price">{{$trip->price}} €</div>
                    <div class="country">{{$trip->country}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
