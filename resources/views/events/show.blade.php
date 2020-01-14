@extends('../venue-profile')

@section('title')
    {{ $event->name }}
@endsection

@section('content')

<div class="container4">
    <div class="row">
    
        <!--EVENT IMAGE HEADER-->
        <div style="background-image: url({{ asset('images/' . $event->profileImgSrc) }}) " class="col-md-12 profile-image venue-profile-bg">
          <div class="container profile-top-nav">
            <ul>
              <li><a href="/events" class="fa fa-left-bottom fa-arrow-left"></a></li>
            </ul>
            <h1>{{ $event->name }}</h1>     
          </div>
        </div>
        
        <!--PROFILE NAV-->
        <div class="profile-nav">
          <div class="container">
            <ul>
              <li><a href="#bio">Biography</a></li>
              <li><a href="#video">Video</a></li>
              <li><a href="#venue">Venues</a></li>
            </ul>
          </div>
        </div>
        
        <!--LANDING-->
        <div class="profile-links">
          <div class="container">
          
            <div class="col-md-10 col-sm-12 links">
              <div class="grey">On the internet /</div>
              <ul>
                <li><a href="{{ $event->fbLink }}" target="_blank">Facebook</a>/ </li>
                <li><a href="mailto:{{ $event->emailLink ?? "Email Unavailable" }}">Email</a>/ </li>
              </ul>
              @guest
              
              @else
              <div class="grey">Edit Venue /</div>
              <div class="blue-link">
                <a href="/events/{{ $event->name }}/edit">Edit</a>
              </div>               
              @endguest              
            </div>
            
            <div class="col-md-2 col-sm-12 counter">
              <div class="grey">Favourites /</div>
              <div id="counter" class="counter-display">
                {{ $event->favouritesCount }}
              </div>
              <i onclick="$event->increment('favouritesCounter')" class="fas fa-heart favourite-button"><a class="favourite-button-inner" href="#">Favourite</a></i>
            </div>
            
          </div>
        </div>
        
        <div class="clear"></div>    
        
        <!--PROFILE MAIN-->
        <div class="profile-main">
          <div class="container">
            <div class="col-lg-12" id="bio">
              <h1>Biography</h1>
              <p>
                {{ $event->biography }}
              </p>
            </div>
            <div class="col-lg-12" id="video">
              <h1>Video</h1>
              <div class="facebook-responsive">
                <iframe src="{{ $event->vidLink }}" 
                width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                {{ $event->vidLink }}
              </div>
            </div>
            <div class="col-lg-12" id="venue">
              <h1>Venues</h1>
                <div class="container3" id="grid">                
                    <!--DISPLAY EVENT VENUE-->
                    <?php $venue = $event->venue ?>
                    <div class="col-md-12 stage">
                        <!-- Venue indexImgSrc dynamically assigned, by displaying an uploaded image and getting the image
                        from the user inputed src when creating a new Venue. From: 'public/images/imageName.jpg' -->
                        <img src="{{ asset('images/' . $venue->indexImgSrc) }}" alt="{{ $venue->name }}" width="1600" height="900" class="img-responsive" style="opacity: 0.8;">
                        <div class="caption">
                            <!-- Venue Name, displayed using Javascript / Animations & dynamically from the database -->
                            <h2 class="stage-name" style="display: block; opacity: 1;">{{ $venue->name }}</h2>
                            <p class="stage-desc" style="display: none;">
                                "For all you need to know about {{ $venue->name }}. "
                                <br>
                                <br>
                                <!-- Route Model Binding displays the given Venue as defined in the Venue model, using the Venue 'name' attribute.
                                Link will redirect the user to the Venue page, as defined in the Venues 'show.blade.php' file. -->
                                <a href="/venues/{{ $venue->name }}">Click Here</a>
                            </p>
                        </div>
                    </div>                    
                </div>
            </div>  
          </div> 
 
    </div>
</div>


@endsection