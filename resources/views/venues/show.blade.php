@extends('../venue-profile')

@section('title')
    {{ $venue->name }}
@endsection

@section('content')

<div class="container4">
    <div class="row">
    
        <!--VENUE IMAGE HEADER-->
        <div style="background-image: url({{ asset('images/' . $venue->profileImgSrc) }}) " class="col-md-12 profile-image venue-profile-bg">
          <div class="container profile-top-nav">
            <ul>
              <li><a href="/venues" class="fa fa-left-bottom fa-arrow-left"></a></li>
            </ul>
            <h1>{{ $venue->name }}</h1>     
          </div>
        </div>
        
        <!--PROFILE NAV-->
        <div class="profile-nav">
          <div class="container">
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#bio">Biography</a></li>
              <li><a href="#map">Location</a></li>
            </ul>
          </div>
        </div>
        
        <!--LANDING-->
        <div class="profile-links">
          <div class="container">
          
            <div class="col-md-10 col-sm-12 links">
              <div class="grey">On the internet /</div>
              <ul>
                <li><a href="{{ $venue->fbLink }}" target="_blank">Facebook</a>/ </li>
                <li><a href="{{ $venue->siteLink }}" target="_blank">Website</a>/ </li>
                <li><a href="mailto:{{ $venue->emailLink ?? "Email Unavailable" }}">Email</a>/ </li>
              </ul>
              <div class="grey">Edit Venue /</div>
              <div class="blue-link">
                <a href="/venues/{{ $venue->name }}/edit">Edit</a>
              </div>               
            </div>
            
            <div class="col-md-2 col-sm-12 counter">
              <div class="grey">Favourites /</div>
              <div id="counter" class="counter-display">
                {{ $venue->favouritesCount }}
              </div>
              <i onclick="$venue->increment('favouritesCounter')" class="fas fa-heart favourite-button"><a class="favourite-button-inner" href="#">Favourite</a></i>
            </div>
            
          </div>
        </div>
        
        <div class="clear"></div>    
        
        <!--PROFILE MAIN-->
        <div class="profile-main">
          <div class="container">
            <div class="col-lg-12" id="about">
              <h1>About</h1>
              <p>
                {{ $venue->about }}
              </p>
            </div>
            <div class="col-lg-12" id="bio">
              <h1>Biography</h1>
              <p>
                {{ $venue->biography }}
              </p>
            </div>
          </div>
          
          <!--MAP CONTAINER AND SCRIPTS-->
          <div class="col-lg-12" id="map" style="width:100%;height:300px;"></div>
          <script>
            function initMap() {
              var location = {lat: {{ $venue->mapLat }}, lng: {{ $venue->mapLon }} };
              var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: location
              });
              var marker = new google.maps.Marker({
                position: location,
                map: map
              });
            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx9c7Xirtj2tFeTEmaUEfHJCEOWo0flHE&callback=initMap"></script>          
        
    </div>
</div>


@endsection