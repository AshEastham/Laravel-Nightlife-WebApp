@extends('../layout')

@section('title')
    Edit Venue
@endsection

@section('title')
    Edit Venue
@endsection

@section('content')
    <h1 class="title">Edit Venue</h1>
    
    <form method="POST" action="/venues/{{ $venue->name }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    
        <div class="form-group">
            <h2>General Venue Info</h2>
            
            <label for="name">Name</label>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Venue Name" value="{{ $venue->name }}">
            </div>
            
            <div>
                <label for="about">About</label>
                <div>
                    <textarea name="about" class="form-control">{{ $venue->about }}</textarea>         
                </div>
            </div>
            
            <div>
                <label for="biography">Biography</label>
                <div>
                    <textarea name="biography" class="form-control">{{ $venue->biography }}</textarea>         
                </div>
            </div>
            
            <h2>Venue Location Info</h2>
            
            <label for="mapLat">Map Latitude</label>
            <div class="form-group">
                <input type="text" class="form-control" name="mapLat" placeholder="Venue Latitude" value="{{ $venue->mapLat }}">
            </div>
            
            <label for="mapLon">Map Longitude</label>
            <div class="form-group">
                <input type="text" class="form-control" name="mapLon" placeholder="Venue Latitude" value="{{ $venue->mapLon }}">
            </div>
            
            <h2>Venue Social Info</h2>
            
            <label for="fbLink">Facebook Link</label>
            <div class="form-group">
                <input type="text" class="form-control" name="fbLink" placeholder="Venue Facebook Page" value="{{ $venue->fbLink }}">
            </div>
            
            <label for="siteLink">Website Link</label>
            <div class="form-group">
                <input type="text" class="form-control" name="siteLink" placeholder="Venue Web Page" value="{{ $venue->siteLink }}">
            </div>
            
            <label for="emailLink">Email Address</label>
            <div class="form-group">
                <input type="text" class="form-control" name="emailLink" placeholder="Venue Email Address" value="{{ $venue->emailLink }}">
            </div>
            
            <h2>Venue Image Info</h2>
            <p>
                DISCLAIMER: Please enter the name of the image source.  <br>
                Please keep filenames simple i.e. 'beaverworks.jpg', or 'beaverworks-profile.jpg'.  <br>
                The recommended image size for the Index page is '1500 x 900'. <br>
                And for the profile image (displayed on the actual venue page) the recommended
                size is 1340 x 575.  
            </p>
            <p>
                Images can be uploaded using the photo upload utility, which you can find <a href="#">here</a>
            </p>            
            
            <label for="indexImgSrc">Index Img Source</label>
            <div class="form-group">
                <input type="text" class="form-control" name="indexImgSrc" placeholder="Venue Index Image Source" value="{{ $venue->indexImgSrc }}">
            </div>
            
            <label for="profileImgSrc">Profile Img Source</label>
            <div class="form-group">
                <input type="text" class="form-control" name="profileImgSrc" placeholder="Venue Profile Image Source" value="{{ $venue->profileImgSrc }}">
            </div>
            
            <div>
                <div>
                    <button type="submit" class="btn btn-primary">Update Venue</button>  
                </div>
            </div>
            
            @include('errors')
            
        </div>
    </form>
    
    @if (auth()->user()->id == 1)
    <form method="POST" action="/venues/{{ $venue->name }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div>
            <div>
            <button type="submit" class="btn btn-danger">Delete Venue</button>
            </div>
        </div>
    </form>
    @endif
    
@endsection