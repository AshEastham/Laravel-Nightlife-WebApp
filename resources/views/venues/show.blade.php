@extends('../venue-profile')
<!-- Changes title of webpage in the browser to the Venues name, using an Eloquent short form query. -->
@section('title')
    {{ $venue->name }}
@endsection

@section('content')

<div class="container4">
    <div class="row">
    
        <!--VENUE IMAGE HEADER-->
        <!-- Venue profileImgSrc dynamically assigned, by displaying an uploaded image and getting the image
        from the user inputed src when creating a new Venue. From: 'public/images/imageName.jpg' -->        
        <div style="background-image: url({{ asset('images/' . $venue->profileImgSrc) }}) " class="col-md-12 profile-image venue-profile-bg">
          <div class="container profile-top-nav">
            <ul>
              <li><a href="/venues" class="fa fa-left-bottom fa-arrow-left"></a></li>
            </ul>
            <!-- Venue Name, displayed dynamically from the database -->
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
              <li><a href="#event">Events</a></li>
            </ul>
          </div>
        </div>
        
        <!--LANDING-->
        <div class="profile-links">
          <div class="container">
          
            <div class="col-md-10 col-sm-12 links">
              <div class="grey">On the internet /</div>
              <ul>
                <!-- Social links pulled from the database -->
                <li><a href="{{ $venue->fbLink }}" target="_blank">Facebook</a>/ </li>
                <li><a href="{{ $venue->siteLink }}" target="_blank">Website</a>/ </li>
                <li><a href="mailto:{{ $venue->emailLink ?? "Email Unavailable" }}">Email</a>/ </li>
              </ul>
              <!-- If a user is a guest don't display the edit link, otherwise display the edit link
                   which is further protected by Laravel's Auth Middleware, as Unauthorised users can't edit a Venue.-->
              @guest
              
              @else
              <div class="grey">Edit Venue /</div>
              <div class="blue-link">
                <a href="/venues/{{ $venue->name }}/edit">Edit</a>
              </div>               
              @endguest
              
            </div>
            
            <div class="col-md-2 col-sm-12 counter">
              <div class="grey">Favourites /</div>
              <div id="counter" class="counter-display">
                <!-- Favourites will default to 1, currently undefined feature -->
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
                <!-- Venue 'about', 'biography' attribute displayed from the database -->
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
          <!-- Google Map's API used dynamically to display the location of different Venues,
               as the Latitude and Longitude of the Venue are specified when creating a new Venue. -->
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
          
          <div class="profile-main">
            <div class="container">
                <div class="col-lg-12" id="event">
                  <h1>Events</h1>
                    <div class="container3" id="grid">                
                        <!--DISPLAY EVENT VENUE-->
                        <?php $events = $venue->events ?>
                        @foreach ($events as $event)
                            <div class="col-md-4 stage">
                                <img src="{{ asset('images/' . $event->indexImgSrc) }}" alt="{{ $event->name }}" width="1600" height="900" class="img-responsive" style="opacity: 0.8;">
                                <div class="caption">
                                    <h2 class="stage-name" style="display: block; opacity: 1;">{{ $event->name }}</h2>
                                    <p class="stage-desc" style="display: none;">
                                        "For all you need to know about {{ $event->name }}. "
                                        <br>
                                        <br>
                                        <a href="/events/{{ $event->name }}">Click Here</a>
                                    </p>
                                </div>
                            </div>
                        @endforeach                                 
                    </div>
                </div>
             </div>   
          </div>

    </div>
</div>


@endsection