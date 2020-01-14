@extends('../layout')

@section('title')
    Create Venue
@endsection

@section('title')
    Create a new Venue
@endsection

@section('content')
    <h1>Create A New Venue</h1>
    
    <form method="POST" action="/venues">
        <!-- CSRF field prevents Cross-Site Request Forgery -->
        <!-- This code will generate a CSRF token, which is generated automatically for each user.
             It's nothing more than a random string, managed by Laravel to verify a users request. 
             Requests are validated automatically by the CSRF VerifyCsrfToken middleware.-->
        {{ csrf_field() }}
        
        <h2>General Venue Info</h2>
    
        <div class="form-group">
            <label for="name">Venue Name</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="name" 
                placeholder="Please enter the Venue's name" 
                value="{{ old('name') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="about">Venue About Description</label><br>
            <textarea 
                name="about" 
                class="form-control" 
                placeholder="Venue about description, please enter a short opinion / description of the venue" 
                value="{{ old('about') }}" 
                required
            ></textarea>
        </div>
        
        <div class="form-group">
            <label for="biography">Venue Biography Description</label><br>
            <textarea 
                name="biography" 
                class="form-control" 
                placeholder="Venue biography description, please enter an excerpt from the venue's official channels" 
                value="{{ old('biography') }}" 
                required
            ></textarea>
        </div>
        
        <h2>Venue Location Info</h2>
        
        <div class="form-group">
            <label for="mapLat">Venue Location Latitude Number</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="mapLat" 
                placeholder="Please enter the Venue's latitude number. (found on google maps)" 
                value="{{ old('mapLat') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="mapLon">Venue Location Longitude Number</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="mapLon" 
                placeholder="Please enter the Venue's longitude number. (found on google maps)" 
                value="{{ old('mapLon') }}" 
                required
            >
        </div>
        
        <h2>Venue Social Info</h2>
        
        <div class="form-group">
            <label for="fbLink">Venue Facebook Page Link</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="fbLink" 
                placeholder="Please enter the link for the Venue's Facebook page" 
                value="{{ old('fbLink') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="siteLink">Venue Website Link</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="siteLink" 
                placeholder="Please enter the link for the Venue's web page" 
                value="{{ old('siteLink') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="emailLink">Venue Contact Email</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="emailLink" 
                placeholder="Please enter the Venue's contact email" 
                value="{{ old('emailLink') }}" 
            >
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
            Images can be uploaded using the photo upload utility, which you can find <a href="{{ url('/imageUpload') }}" target="_blank"><strong>here</strong></a>
        </p>
        
        <div class="form-group">
            <label for="indexImgSrc">Venue Index Image Source</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="indexImgSrc" 
                placeholder="Please enter the venue's image name (displayed on Venue selection page)" 
                value="{{ old('indexImgSrc') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="profileImgSrc">Venue Profile Image Source</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="profileImgSrc" 
                placeholder="Please enter the venue's image name (displayed on Venue profile page)" 
                value="{{ old('profileImgSrc') }}" 
                required
            >
        </div>        
        
        <div>
            <button type="submit" class="btn btn-primary">Create Venue</button>
        </div>
        
        @include('errors')
        
    </form>    
@endsection