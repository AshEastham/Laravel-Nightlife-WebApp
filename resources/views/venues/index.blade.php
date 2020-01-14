@extends('../venue-index')

@section('title')
    Venues
@endsection

@section('content')
    
    <div id="venues-main">
    
        @section('page-title')
            VENUES
        @endsection
        
        <div class="container3" id="grid">
            <!-- Eloquent query to display all Venues in the database -->
            @foreach ($venues as $venue)
                <div class="col-md-4 stage">
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
            @endforeach
        </div>
        
    </div>    

@endsection