@extends('../venue-index')

@section('title')
    Events
@endsection

@section('content')
    
    <div id="events-main">
    
        @section('page-title')
            EVENTS
        @endsection
        
        <div class="container3" id="grid">
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

@endsection