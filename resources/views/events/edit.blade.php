@extends('../layout')

@section('title')
    Edit Event
@endsection

@section('title')
    Edit Event
@endsection

@section('content')
    <h1 class="title">Edit Event</h1>
    
    <form method="POST" action="/events/{{ $event->name }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    
        <div class="form-group">
            <h2>General Event Info</h2>
            
            <label for="name">Name</label>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Event Name" value="{{ $event->name }}">
            </div>
            
            <div>
                <label for="biography">Biography</label>
                <div>
                    <textarea name="biography" class="form-control">{{ $event->biography }}</textarea>         
                </div>
            </div>
            
            <h2>Event Video Info</h2>
            
            <label for="vidLink">Video Embed Link</label>
            <div class="form-group">
                <input type="text" class="form-control" name="vidLink" placeholder="Event video embed link" value="{{ $event->vidLink }}">
            </div>
            
            <h2>Event Social Info</h2>
            
            <label for="fbLink">Facebook Link</label>
            <div class="form-group">
                <input type="text" class="form-control" name="fbLink" placeholder="Event Facebook Page" value="{{ $event->fbLink }}">
            </div>
            
            <label for="emailLink">Email Address</label>
            <div class="form-group">
                <input type="text" class="form-control" name="emailLink" placeholder="Event Email Address" value="{{ $event->emailLink }}">
            </div>
            
            <h2>Event Image Info</h2>
            <p>
                DISCLAIMER: Please enter the name of the image source.  <br>
                Please keep filenames simple i.e. 'beaverworks.jpg', or 'beaverworks-profile.jpg'.  <br>
                The recommended image size for the Index page is '1500 x 900'. <br>
                And for the profile image (displayed on the actual event page) the recommended
                size is 1340 x 575.  
            </p>
            <p>
                Images can be uploaded using the photo upload utility, which you can find <a href="#">here</a>
            </p>            
            
            <label for="indexImgSrc">Index Img Source</label>
            <div class="form-group">
                <input type="text" class="form-control" name="indexImgSrc" placeholder="Event Index Image Source" value="{{ $event->indexImgSrc }}">
            </div>
            
            <label for="profileImgSrc">Profile Img Source</label>
            <div class="form-group">
                <input type="text" class="form-control" name="profileImgSrc" placeholder="Event Profile Image Source" value="{{ $event->profileImgSrc }}">
            </div>
            
            <div>
                <div>
                    <button type="submit" class="btn btn-primary">Update Event</button>  
                </div>
            </div>
            
            @include('errors')
            
        </div>
    </form>
    
    @if (auth()->user()->id == 1)
    <form method="POST" action="/events/{{ $event->name }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div>
            <div>
            <button type="submit" class="btn btn-danger">Delete Event</button>
            </div>
        </div>
    </form>
    @endif
    
@endsection