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
            @foreach ($venues as $venue)
                <div class="col-md-4 stage">
                    <img src="{{ asset('images/' . $venue->indexImgSrc) }}" alt="{{ $venue->name }}" width="1600" height="900" class="img-responsive" style="opacity: 0.8;">
                    <div class="caption">
                        <h2 class="stage-name" style="display: block; opacity: 1;">{{ $venue->name }}</h2>
                        <p class="stage-desc" style="display: none;">
                            "For all you need to know about {{ $venue->name }}. "
                            <br>
                            <br>
                            <a href="/venues/{{ $venue->name }}">Click Here</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>    

@endsection